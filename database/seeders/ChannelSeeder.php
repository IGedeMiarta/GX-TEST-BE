<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
