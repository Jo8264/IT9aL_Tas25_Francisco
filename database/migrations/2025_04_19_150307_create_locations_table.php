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
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->string('street_address')->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('city', 50);
            $table->string('state_province', 50)->nullable();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
