<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BranchOffice;
use App\Models\Channel;
use App\Models\Leads;
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
        
        $this->call([
            BranchOfficeSeeder::class,
            ChannelSeeder::class,
            LeadStatusSeeder::class,
            MediaSeeder::class,
            ProbabilitySeeder::class,
            SourceSeeder::class,
        ]);

        Leads::factory(15)->create();
    }
}
