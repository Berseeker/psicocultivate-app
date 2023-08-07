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
        Schema::create('kanban', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('fecha_vencimiento');
            $table->longText('archivos')->nullable();
            // FK - USER
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // FK - PSICOLOGO
            $table->unsignedBigInteger('psicologo_id');
            $table->foreign('psicologo_id')->references('id')->on('users');
            // FK - KANBAN_STATUS
            $table->unsignedBigInteger('kanban_status_id');
            $table->foreign('kanban_status_id')->references('id')->on('kanban_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanban');
    }
};
