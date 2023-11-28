<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function office(){
        return $this->belongsTo(BranchOffice::class,'office_id');
    }
    public function status(){
        return $this->belongsTo(LeadStatus::class,'status_id');
    }
    public function probability(){
        return $this->belongsTo(Probability::class,'probability_id');
    }
    public function channel(){
        return $this->belongsTo(Channel::class,'channel_id');
    }
    public function media(){
        return $this->belongsTo(Media::class,'media_id');
    }
    public function source(){
        return $this->belongsTo(Source::class,'source_id');
    }
}
