<?php

use App\Models\Organisator;
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
        Schema::create('organisators', function (Blueprint $table) {
            $table->id('org_id');
            $table->string('name');
            $table->string('description');
            $table->primary(array('org_id'));
            $table->timestamps();
        });

        Organisator::create([
            'org_id' => 1111,
            'name' => 'qweqwerqwe',
            'description' => 'afklasdlgésmdlghmsé'
        ]);
        Organisator::create([
            'org_id' => 2222,
            'name' => 'qweqwerqwe',
            'description' => 'afklasdlgésmdlghmsé'
        ]);
        Organisator::create([
            'org_id' => 3333,
            'name' => 'qweqwerqwe',
            'description' => 'afklasdlgésmdlghmsé'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisators');
    }
};
