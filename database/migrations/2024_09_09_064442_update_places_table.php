<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('places', function(Blueprint $table){
            $table->string('name');
            $table->string('description');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('address');
            $table->double('latitude', 8, 3);
            $table->double('longitude', 8,3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('types', function(Blueprint $table){
            $table->dropColumn(['name', 'description', 'city', 'province', 'postal_code', 'address', 'latitude', 'longitude']);
        });
    }
};
