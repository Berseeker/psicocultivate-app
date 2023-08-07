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
        Schema::create('kanban_comentarios', function (Blueprint $table) {
            $table->id();
            $table->longText('comentario');
            // FK - KANBAN
            $table->unsignedBigInteger('kanban_id');
            $table->foreign('kanban_id')->references('id')->on('kanban');
            // FK - USER
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanban_comentarios');
    }
};
