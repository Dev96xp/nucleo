<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Subcategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();

            $table->boolean('description')->default(false);
            $table->boolean('note1')->default(false);
            $table->boolean('video')->default(false);
            $table->enum('status', [Subcategory::ACTIVE, Subcategory::INACTIVE, Subcategory::PENDING])->default(Subcategory::ACTIVE);

            // 1- Definicion de la columns
            $table->unsignedBigInteger('category_id');

            // 2- Restriciones a la relacion1
            // MASTER CLASS - En el caso de que se elimine una Categoria, en cascada se eliminaran tambien
            //                las subcategorias
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
