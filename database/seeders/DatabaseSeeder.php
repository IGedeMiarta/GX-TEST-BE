<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BranchOffice;
use App\Models\Channel;
use App\Models\LeadStatus;
use App\Models\Media;
use App\Models\Probability;
use App\Models\Source;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'admingx',
            'password' => 'admingx2023',
        ]);
        BranchOffice::create([
            'name'=>'GlobalXtreme Bali'
        ]);
        BranchOffice::create([
            'name'=>'GlobalXtreme Malang'
        ]);
        BranchOffice::create([
            'name'=>'GlobalXtreme Jakarta'
        ]);
        BranchOffice::create([
            'name'=>'GlobalXtreme Balikpapan'
        ]);
        BranchOffice::create([
            'name'=>'GlobalXtreme Samarinda'
        ]);

        LeadStatus::create([
            'name'  => 'Consideration'
        ]);
        LeadStatus::create([
            'name'  => 'Scheduled'
        ]);
        LeadStatus::create([
            'name'  => 'Junk / Trash'
        ]);
        LeadStatus::create([
            'name'  => 'FCB - Future Call Back'
        ]);
        LeadStatus::create([
            'name'  => 'Qualified'
        ]);
        LeadStatus::create([
            'name'  => 'NI - Not Intrested'
        ]);
        LeadStatus::create([
            'name'  => 'Out Coverage'
        ]);
        LeadStatus::create([
            'name'  => 'Not Response'
        ]);
        LeadStatus::create([
            'name'  => 'Pending'
        ]);
        LeadStatus::create([
            'name'  => 'Cancel'
        ]);

        Probability::create([
            'name'  => 'Pending'
        ]);
        Probability::create([
            'name'  => 'Cancel'
        ]);
        Probability::create([
            'name'  => 'Converted'
        ]);

        Channel::create([
            'type'=> rand(0,1),
            'name' => 'Official Channels'
        ]);
        Channel::create([
            'type'=> rand(0,1),
            'name' => 'Walks-In'
        ]);
        Channel::create([
            'type'=> rand(0,1),
            'name' => 'Markering Channels'
        ]);

        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'WA Center'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'Call'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'Website'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'Email'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'Whatsapp Blast'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'Referals'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 1,
            'name'  => 'OOH'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 2,
            'name'  => 'Branch Badung'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 2,
            'name'  => 'Branch Denpasar'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 2,
            'name'  => 'Branch Malang'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 2,
            'name'  => 'Branch Balikpapan'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 2,
            'name'  => 'Branch Samarinda'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 3,
            'name'  => 'Open Booth'
        ]);
        Media::create([
            'type' => rand(0,1),
            'channel_id'    => 3,
            'name'  => 'Digital Platform'
        ]);

        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 1,
            'name'      => 'Sales'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 1,
            'name'      => 'Customer Support'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 2,
            'name'      => 'Sales'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 2,
            'name'      => 'Customer Support'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 3,
            'name'      => 'Tawk To'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 3,
            'name'      => 'Lead Form'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 14,
            'name'      => 'Google Bussiness'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 14,
            'name'      => 'Facebook'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 14,
            'name'      => 'Instagram'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 14,
            'name'      => 'Google Ads'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 14,
            'name'      => 'TikTok'
        ]);
        Source::create([
            'type'=> rand(0,1),
            'channel_id'=> 1,
            'media_id'  => 14,
            'name'      => 'Meta Ads'
        ]);
    }
}
