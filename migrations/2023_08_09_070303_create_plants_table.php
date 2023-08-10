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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            // $table->integer('plant_details_id')->unsigned();   
            $table->integer('plant_id');
            $table->integer('plant_category_id')->unsigned();
            $table->string('name');
            $table->integer('plant_images_id')->unsigned();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->double('price');
            $table->string('tag')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
