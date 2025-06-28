<?php

use App\Models\Parametre;
use App\Models\Realty;
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
        Schema::create('realty_parametres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Realty::class, 'realty_id');
            $table->foreignIdFor(Parametre::class, 'parametre_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realty_parametres');
    }
};
