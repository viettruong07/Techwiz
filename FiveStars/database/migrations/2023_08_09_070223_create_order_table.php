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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');  
            $table->integer('blog_id');
            $table->integer('plant_id');
            $table->string('company_name')->nullable();
            $table->string('country');
            $table->string('street_address');
            $table->string('postcode_zip');
            $table->string('town_city');
            $table->string('email');
            $table->string('phone');
            $table->string('qty');
            $table->string('date_order');
            $table->integer('status');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
