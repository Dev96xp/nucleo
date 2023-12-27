<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_section', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('section_id'); //Los campos
            $table->unsignedBigInteger('item_id'); //Los campos

            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade'); //Las rescticiones para llave forarnea
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade'); //Las rescticiones para llave forarnea

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_section');
    }
};
