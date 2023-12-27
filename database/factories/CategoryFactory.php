<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        /*
        IMPORTANTE: Por default las imagenes se subiran a (storage/app), es preferible que se suban dentro
        de la carpeta (storage/app/public), usando el acceso directo (storage) que esta dentro de la carpeta (public),
        por tal motivo hay que tener el setting de (config/filesystems.php) esta manera:
        ('default' => env('FILESYSTEM_DISK', 'public'),)
        */

        return [
            // FAKER - NO TIENE LA CAPACIDA DE CREAR CARPETAS, por tanto hay que crear esta carpeta con anticipacion
            // desde el DatabaseSeeder.php
            // MODIFICADO PARA PRODUCTION
            'image' => 'categories/' . $this->faker->image('public/storage/categories', 640, 480, null, false),
            'status'=>$this->faker->randomElement([Category::ACTIVE, Category::INACTIVE, Category::PENDING]),
        ];
    }
}
