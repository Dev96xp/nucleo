<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // IMPORTANT: Si existe que elimine la carpeta products, incluyendo
        //  sus archivos internos previniendo llenar de imagenes que no se volveran a usar

        Storage::deleteDirectory('public/products');
        Storage::makeDirectory('public/products');

        Storage::deleteDirectory('public/categories');  //OJO antes solo usaba la palabara categories, ahora se le agrego public
        Storage::makeDirectory('public/categories');

        //Storage::deleteDirectory('subcategories');
        //Storage::makeDirectory('subcategories');

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(SectionSeeder::class);

        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);

        $this->call(ProductSeeder::class);
        $this->call(ItemSeeder::class);

        $this->call(ProjectSeeder::class);

        $this->call(EventSeeder::class);
    }
}
