<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('gender');
            $table->primary(array('id'));
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
        });

        User::create([
            'id' => 1111,
            'name' => 'Teszt Elek',
            'email' => 'afa1af@adadasd.com',
            'gender' => 0
        ]);
        User::create([
            'id' => 2222,
            'name' => 'Teszt Elek',
            'email' => 'afas3f@adadasd.com',
            'gender' => 0
        ]);
        User::create([
            'id' => 3333,
            'name' => 'Teszt Elek',
            'email' => 'af2f@adadasd.com',
            'gender' => 0
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
