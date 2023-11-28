<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
