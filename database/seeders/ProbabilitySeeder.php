<?php

namespace Database\Seeders;

use App\Models\Probability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProbabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Probability::create([
            'name'  => 'Pending'
        ]);
        Probability::create([
            'name'  => 'Cancel'
        ]);
        Probability::create([
            'name'  => 'Converted'
        ]);
    }
}
