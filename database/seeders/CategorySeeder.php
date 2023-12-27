<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Hall rental',
                'slug' => str ::slug('hall-rental'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
            [
                'name' => 'Hall decoration',
                'slug' => str ::slug('hall-decoration'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
            [
                'name' => 'Prom dresses',
                'slug' => str ::slug('prom-dresses'),
                'icon' =>'<i class="fas fa-user-graduate"></i>'
            ],
            [
                'name' => 'Paquetes de quince',
                'slug' => str ::slug('paquetes-de-quince'),
                'icon' =>'<i class="fas fa-user-graduate"></i>'
            ],
        ];

        foreach($categories as $category){
            $category = Category::factory(1)->create($category)->first();

            //$brands = Brand::Factory(2)->create();
         /*   $brands = Brand::all();

            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
*/
        }
    }
}
