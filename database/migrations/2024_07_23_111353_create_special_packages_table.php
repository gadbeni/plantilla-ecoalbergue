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
        Schema::create('special_packages', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('images')->nullable(); // Considera usar JSON si planeas almacenar múltiples imágenes
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('language', ['es', 'en'])->default('es');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_packages');
    }
};
