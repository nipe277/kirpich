<?php

use App\Models\City;
use App\Models\District;
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
        Schema::create('district_city', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(City::class, 'city_id')->constrained();
            $table->foreignIdFor(District::class, 'district_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('district_city');
    }
};
