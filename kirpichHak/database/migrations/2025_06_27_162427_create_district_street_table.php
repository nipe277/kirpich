<?php

use App\Models\District;
use App\Models\Street;
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
        Schema::create('district_street', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Street::class, 'street_id')->constrained();
            $table->foreignIdFor(District::class, 'district_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('district_street');
    }
};
