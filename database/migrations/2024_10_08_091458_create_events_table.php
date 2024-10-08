<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');
            $table->string('location');
            $table->foreignId('org_id')->references('org_id')->on('organisators');
            $table->primary(array('event_id'));
            $table->timestamps();
        });

        Event::create([
            'event_id' => 1,
            'date' => now(),
            'location' => 'Mátészalka',
            'org_id' => 1111
        ]);
        Event::create([
            'event_id' => 2,
            'date' => now(),
            'location' => 'Túrkeve',
            'org_id' => 2222
        ]);
        Event::create([
            'event_id' => 3,
            'date' => now(),
            'location' => 'Taktaharkány',
            'org_id' => 3333
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
