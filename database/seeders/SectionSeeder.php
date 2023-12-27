<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create(['name' => 'General', 'description' => '']);
        Section::create(['name' => 'Materials', 'description' => '']);
        Section::create(['name' => 'Labor', 'description' => '']);
        Section::create(['name' => 'Transport', 'description' => '']);
        Section::create(['name' => 'Hotels', 'description' => '']);
        Section::create(['name' => 'Diging', 'description' => '']);
        Section::create(['name' => 'Demolition', 'description' => '']);
        Section::create(['name' => 'Containers', 'description' => '']);
    }
}
