<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título de la galería
            $table->text('description')->nullable();
            $table->string('featured_image'); // Imagen destacada
            $table->text('images')->nullable();
            $table->string('type')->default('lugar')->nullable(); // $table->enum('type', ['lugar', 'visitantes'])->default('lugar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
};
