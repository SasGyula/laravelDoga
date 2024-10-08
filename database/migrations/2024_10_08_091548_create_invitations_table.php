<?php

use App\Models\Invitation;
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
        Schema::create('invitations', function (Blueprint $table) {
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->boolean('appeared');
            $table->timestamps();
        });

        Invitation::create([
            'event_id' => 1,
            'user_id' => 1111,
            'appeared' => false
        ]);
        Invitation::create([
            'event_id' => 2,
            'user_id' => 2222,
            'appeared' => false
        ]);
        Invitation::create([
            'event_id' => 3,
            'user_id' => 3333,
            'appeared' => false
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
