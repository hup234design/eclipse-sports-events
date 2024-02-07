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
        Schema::create('event_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->text('summary')
                ->nullable();
            $table->longText('content')
                ->nullable();
            $table->string('start_date')
                ->nullable();
            $table->string('end_date')
                ->nullable();
            $table->string('start_time')
                ->nullable();
            $table->string('end_time')
                ->nullable();
            $table->foreignId('event_venue_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('event_location_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_schedules');
    }
};
