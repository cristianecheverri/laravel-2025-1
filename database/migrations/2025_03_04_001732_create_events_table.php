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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 150);
            $table->timestamp('event_date');
            $table->integer('event_max_capacity')->default(0);
            $table->string('event_speaker_name')->nullable();
            $table->string('event_location_name')->nullable();
            $table->string('event_meetup_url')->nullable();
            $table->boolean('event_is_virtual')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
