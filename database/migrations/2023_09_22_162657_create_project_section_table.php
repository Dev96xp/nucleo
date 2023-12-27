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
        // Tabla para relacion muchos a muchos
        Schema::create('project_section', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('project_id'); //Los campos
            $table->unsignedBigInteger('section_id'); //Los campos

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade'); //Las rescticiones para llave forarnea
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade'); //Las rescticiones para llave forarnea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_section');
    }
};
