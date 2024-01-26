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
        Schema::create('obituaries', function (Blueprint $table) {
            $table->id();
            $table->string('your_name');
            $table->string('your_relation');
            $table->string('remembrance_day')->default('NULL');
            $table->string('full_name');
            $table->string('religion');
            $table->string('profession')->default('NULL');
            $table->date('birth_date');
            $table->string('birth_country');
            $table->string('birth_place');
            $table->string('lived_places')->default('NULL');
            $table->string('photo');
            $table->date('death_date');
            $table->text('notification');
            $table->string('video')->default('NULL');
            $table->enum('status',['pending','published'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obituaries');
    }
};
