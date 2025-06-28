<?php

use App\Models\Review;
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
        Schema::create('builders', function (Blueprint $table) {
            $table->id();
            $table->string('inn', 12);
            $table->string('ogrn', 13);
            $table->enum('status', ['All ok']);
            $table->foreignIdFor(Review::class, 'review_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builders');
    }
};
