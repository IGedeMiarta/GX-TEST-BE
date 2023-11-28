<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BranchOffice;
use App\Models\Channel;
use App\Models\Leads;
use App\Models\LeadStatus;
use App\Models\Media;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LeadsController extends Controller
{
    public function index(Request $request){
        $leads = new Leads();
        $leads = $leads->with('office','status','probability','channel','media','source');
        $leads = $leads->select(['*', DB::raw('IF(lead_type = 1, "Inbound", "Outbound") as type')]);
        $msg  = 'Get All Leads';

        if($request->search){
            $msg  .= ' & Search: '.$request->search;
            $leads = $leads->where('fullname','like','%'.$request->search.'%')
                            ->orWhere('email','like','%'.$request->search.'%')
                            ->orWhere('number','like','%'.$request->search.'%');
        }
        if($request->date_start && $request->date_end){
            $msg  .= ' & date: '.$request->date_start.' - '. $request->date_end;
            $leads = $leads->whereBetween('created_at', [$request->date_start . ' 00:00:00', $request->date_end . ' 23:59:59']);
        }
        if($request->status){
            $status = json_decode($request->status, true);

            $msg .= ' & status: in '. json_encode($status);
            $leads = $leads->whereIn('status_id',$status);
        }
        if($request->office){
            $office = json_decode($request->office, true);

            $msg .= ' & office: in '. json_encode($office);
            $leads = $leads->whereIn('office_id',$office);
        }
        if($request->probability){
            $msg .= ' & probability_id:'.$request->probability;
            $leads = $leads->where('probability_id',$request->probability);
        }
        if($request->channel){
            $channel = json_decode($request->channel, true);

            $msg .= ' & channel: in '. json_encode($channel);
            $leads = $leads->whereIn('channel_id',$channel);
        }
        if($request->media){
            $media = json_decode($request->media, true);

            $msg .= ' & media: in '. json_encode($media);
            $leads = $leads->whereIn('media_id',$media);
        }
        if($request->source){
            $source = json_decode($request->source, true);

            $msg .= ' & source: in '. json_encode($source);
            $leads = $leads->whereIn('source_id',$source);
        }

        $leads = $leads->paginate(10);
        return response()->json([
            'status'    => 200,
            'message'   => $msg,
            'num'       => leadsnum(),
            'data'      => $leads
        ]);
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'fullname'          => 'required',
            'office'            => 'required',
            'email'             => 'required|email',
            'address'           => 'required',
            'phone'             => 'required',
            'lattitude'         => 'required',
            'longitude'         => 'required',
            'status_id'         => 'required',
            'probability_id'    => 'required',
            'lead_type'         => 'required',
            'channel_id'        => 'required',
            'general_notes'     => 'required',

        ]);
        if($validator->fails()){
            return response()->json([
                'status'    => 402,
                'message'   => 'Validation Error',
                'errors'    => $validator->errors()
            ]);
        }
        DB::beginTransaction();
        try {
            $leads = new Leads();
            $leads->number = leadsnum();
            $leads->fullname = $request->fullname;
            $leads->email = $request->email;
            $leads->phone = $request->phone;
            $leads->address = $request->address;
            $leads->lattitude = $request->lattitude;
            $leads->longitude = $request->longitude;
            $leads->status_id = $request->status_id;
            $leads->probability_id = $request->probability_id;
            $leads->lead_type = $request->lead_type;
            $leads->channel_id = $request->channel_id;
            $leads->media_id = $request->media_id;
            $leads->source_id = $request->source_id;
            $leads->general_notes = $request->general_notes;
            $leads->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status'    => 500,
                'message'   => 'Server Error',
                'errors'    => $th->getMessage()
            ]);
        }
    }

    public function find($type,$id){
        if($type == 'media'){
            $sts    = 200;
            $msg    = 'Media Where ChannelId:'.$id; 
            $data   = Media::where('channel_id',$id)->get();
        }elseif($type == 'source'){
            $sts    = 200;
            $msg    = 'Source Where mediaId:'.$id;
            $data   = Source::where('media_id',$id)->get();
        }else{
            $sts    = 404;
            $msg = 'Find Failed';
            $data = [];
        }
        return response()->json([
            'status'    => $sts,
            'message'   => $msg,
            'data'      => $data
        ]);
    }
}
