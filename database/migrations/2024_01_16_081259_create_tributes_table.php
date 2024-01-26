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
        Schema::create('tributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('obituary_id');
            $table->foreign('obituary_id')->references('id')->on('obituaries')->onDelete('cascade');
            $table->text('message');
            $table->string('name');
            $table->string('relation')->nullable();
            $table->string('country')->nullable();
            $table->string('letter_title')->nullable();
            $table->string('signature_title')->nullable();
            $table->string('photo_title')->nullable();
            
            $table->string('photo_caption')->nullable();
            $table->string('phone_no',20)->nullable();
            $table->string('email')->nullable();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tributes');
    }
};
