<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Para usar el slug se necesita importar la clase Str

        // Creando datos falsos solo para prueba
        $name = $this->faker->word();
        $model = $this->faker->unique()->numberBetween($min = 100000, $max = 997887);
        $company = "ACME";                          //Company::all()->random();

        $subcategory = 'Software';                  //Subcategory::all()->random();

        $category = 'Industry';
        $brand = 'Start';                           //$category->brands->random();
        $price = $this->faker->randomElement([69, 79, 89, 99, 1590, 1090]);

        // if ($category->color) {
        //     $quantity = null;
        // } else {
        //     $quantity = 15;
        // }

        $quantity = 1;

        return [
            'name' => $name,
            'model' => $model,
            'style' => $this->faker->randomElement(['Renacentista', 'Victoriana', 'Princesa']),
            'sku' => 'xx' . $model,
            'description' => $this->faker->paragraph(),
            'price' => $price,
            'quantity' => $quantity,
        ];
    }
}
