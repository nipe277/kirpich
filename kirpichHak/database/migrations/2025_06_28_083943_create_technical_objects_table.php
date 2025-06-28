<?php

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
        Schema::create('technical_objects', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['гараж', 'кладовка', 'паркинг']);
            $table->double('square', unsigned:true);
            $table->enum('accessType', ['открытый', 'шлагбаум', 'ключ'])->nullable();
            $table->set('additional', ['электричество', 'охрана']);
            $table->decimal('price', 12, 2, unsigned:true);
            $table->foreignIdFor(Realty::class)->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_objects');
    }
};
