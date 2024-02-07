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
            $table->foreignId('event_category_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')
                ->unique();
            $table->text('summary')
                ->nullable();
            $table->longText('content')
                ->nullable();
            $table->date('start_date')
                ->nullable();
            $table->date('end_date')
                ->nullable();
            $table->time('start_time')
                ->nullable();
            $table->time('end_time')
                ->nullable();
            $table->foreignId('event_venue_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('event_location_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->boolean('has_multiple')
                ->default(false);
            $table->boolean('is_featured')
                ->default(false);
            $table->timestamps();
            $table->softDeletes();
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
