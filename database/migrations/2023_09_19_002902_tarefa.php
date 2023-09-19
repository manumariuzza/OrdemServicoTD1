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
        Schema::create('tarefa', function (Blueprint $table) {
            $table->id();
            $table->string('nomeTarefa');
            $table->date('dataInicio');
            $table->date('dataFim');
            $table->text('observacao');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
