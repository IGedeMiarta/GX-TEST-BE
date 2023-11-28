<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
