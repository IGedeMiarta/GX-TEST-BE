<?php

namespace Database\Seeders;

use App\Models\LeadStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
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
    }
}
