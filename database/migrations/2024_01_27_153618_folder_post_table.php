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
        Schema::create('folder_post', function (Blueprint $table) {
            $table->id();
            $table->foreignID('post_id')->constrained()->cascadeOnDelete();
            $table->foreignID('folder_id')->constrained()->cascadeOnDelete();
            $table->unique(['folder_id', 'post_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folder_post');
    }
};
