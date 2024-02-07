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
//        Schema::table('events', function (Blueprint $table) {
//            $table->string('location_name')->nullable();
//        });
        Schema::table('event_schedules', function (Blueprint $table) {
            $table->string('location_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::table('event_schedules', function (Blueprint $table) {
//            $table->dropColumn('location_name');
//        });
//        Schema::table('events', function (Blueprint $table) {
//            $table->dropColumn('location_name');
//        });
    }
};
