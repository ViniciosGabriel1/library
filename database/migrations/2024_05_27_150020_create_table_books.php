<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Cria a tabela 'books' com os campos 'titulo', 'autor', 'genero' e 'quantidade_disponivel'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('genero');
            $table->integer('quantidade_disponivel')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * Remove a tabela 'books'.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }


};
