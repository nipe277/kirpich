<?php

use App\Models\Realty;
use App\Models\Request_viewing_status;
use App\Models\RequestViewingStatus;
use App\Models\User;
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
        Schema::create('request_viewings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Realty::class, 'realty_id');
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(RequestViewingStatus::class, 'request_viewing_status_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_viewings');
    }
};
