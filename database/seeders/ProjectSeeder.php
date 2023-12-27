<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Section;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::all();
        foreach ($users as $user) {
            $project = Project::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'phone' => $user->phone,
            ]);

            $project->sections()->attach([1, 2, 3, 4]);
        }

        foreach ($project->sections as $section) {
            $section->items()->attach([1, 2, 3, 6, 7, 9]);
        }

    }
}
