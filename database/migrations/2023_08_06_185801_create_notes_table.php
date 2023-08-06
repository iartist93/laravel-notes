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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // create_at, updated_at automtically
            $table->string('title');
            $table->text('text');
            $table->unsignedBigInteger('user_id');
            $table->string('color')->default('black');
            $table->unsignedBigInteger('folder_id')->nullable();
            $table->string('password')->nullable();
            $table->boolean('pinned')->default(false);

            // relationships
            // $table->foreign('folder_id')->references('id')->on('folders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
