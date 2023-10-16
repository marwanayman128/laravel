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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->string('airline');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->time('duration');
            $table->decimal('price', 10, 2);
            $table->integer('seats');
            $table->string('from');
            $table->string('to');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
