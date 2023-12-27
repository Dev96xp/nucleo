<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $product = Product::all()->random();

        return [
            'name'=>$product->name,
            'slug'=>Str::slug($product->name),
            'sku'=> $product->sku,
            'price'=>$product->price,
            'description'=>$product->description

        ];
    }
}
