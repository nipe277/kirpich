<?php

use App\Models\Builder;
use App\Models\District;
use App\Models\Photo;
use App\Models\Region;
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
        Schema::create('realties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 254);
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('roomCount');
            $table->double('square', unsigned:true);
            $table->tinyInteger('bathroomCount');
            $table->enum('type', ['apartment', 'house', 'commercial']);
            $table->set('status', ['готов', 'требуется ремонт']);
            $table->boolean('legalClear');
            $table->foreignId('region_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('district_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('street_id')->nullable()->constrained()->onDelete('set null');
            $table->string('houseNumber', 15);
            $table->tinyInteger('floorNumber')->nullable();
            $table->unsignedTinyInteger('entrance')->nullable();
            $table->unsignedInteger('flatNumber')->nullable();
            $table->foreignId('photo_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->unsignedTinyInteger('bedroomCount');
            $table->decimal('price', 12, 2, unsigned:true);
            $table->boolean('sold');
            $table->boolean('finishing')->nullable();
            $table->enum('finishingType', ["чистовая", "под ключ", "white box"])->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realties');
    }
};
