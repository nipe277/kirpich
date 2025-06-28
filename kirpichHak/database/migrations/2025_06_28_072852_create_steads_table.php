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
        Schema::create('steads', function (Blueprint $table) {
            $table->id();
            $table->enum('appointment', ['ИЖС', 'СНТ/ДНП', 'ЛПХ', 'коммерческое назначение']);
            $table->double('square', unsigned:true);
            $table->set('facilities', ['Электричество', 'газ', 'вода', 'канализация']);
            $table->double('distanceToCity', unsigned:true)->nullable();
            $table->decimal('price', 12, 2, unsigned:true);
            $table->boolean('sold');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steads');
    }
};
