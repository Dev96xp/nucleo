<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Meeting',
            'start' => now(),
            'end' => now(),
            'description' => "hola",
        ]);
        Event::create([
            'title' => 'Probar Vestido',
            'start' => now(),
            'end' => now(),
            'description' => "hola",
        ]);
        Event::create([
            'title' => 'Ajuste Vestido',
            'start' => now(),
            'end' => now(),
            'description' => "hola",
        ]);
        Event::create([
            'title' => 'Medidas Chambelanes',
            'start' => now(),
            'end' => now(),
            'description' => "hola",
        ]);
    }
}
