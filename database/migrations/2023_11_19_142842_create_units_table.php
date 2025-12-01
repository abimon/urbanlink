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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('description');
            $table->string('category')->default('Land');// Land, House, Apartment, Villa
            $table->string('location');
            $table->string('path');
            $table->string('type');
            $table->string('size');
            $table->longText('services');
            $table->longText('features');
            $table->string('price');
            $table->string('status')->default('On Sale');
            $table->boolean('featured')->default(false);
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('units');
    }
};
