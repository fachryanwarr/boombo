<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ticket_purchaseds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('seat', 2);
            $table->foreignId('user_id');
            $table->timestamps();
            $table->Unique(['movie_id', 'tanggal', 'waktu', 'seat']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_purchaseds');
    }
};

