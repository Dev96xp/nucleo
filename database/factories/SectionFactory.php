<?php

namespace Database\Factories;

use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker(['Section #1','Section #2','Section #3','Section #4']);

        return [
            'name' => $name,
            'description' => $name,
        ];
    }

}
