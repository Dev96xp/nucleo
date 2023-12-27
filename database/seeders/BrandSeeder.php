<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'The palace',
            'code' => 'TH'
        ]);
        Brand::create([
            'name' => 'Morilee',
            'code' => 'MO'
        ]);
        Brand::create([
            'name' => 'Ragazza',
            'code' => 'RA'
        ]);
        Brand::create([
            'name' => 'Dancing Queen',
            'code' => 'DQ'
        ]);
        Brand::create([
            'name' => 'AC wedding',
            'code' => 'AC'
        ]);
        Brand::create([
            'name' => 'House of Wu',
            'code' => 'HW'
        ]);
    }
}
