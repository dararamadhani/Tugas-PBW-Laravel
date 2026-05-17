<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('planners', function (Blueprint $table) {

            $table->id();

            $table->string('hari');

            $table->foreignId('sarapan_id')
            ->constrained('menus');

            $table->foreignId('siang_id')
            ->constrained('menus');

            $table->foreignId('malam_id')
            ->constrained('menus');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('planners');
    }
};