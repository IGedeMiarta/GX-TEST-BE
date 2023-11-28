<?php

namespace Database\Seeders;

use App\Models\BranchOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
