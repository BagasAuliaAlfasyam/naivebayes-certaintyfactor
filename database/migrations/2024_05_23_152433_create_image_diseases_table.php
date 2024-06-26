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
        Schema::create('image_diseases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disease_id');
            $table->string('filename');
            $table->timestamps();
            $table->foreign('disease_id')->references('id')->on('diseases')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_diseases');
    }
};
