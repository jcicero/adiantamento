<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanfesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danfes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('adiantamento_id');
            $table->foreign('adiantamento_id')->references('id')->on('adiantamentos');
            $table->foreignId('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');
            $table->date('data');
            $table->string('nf',20);
            $table->double('valor',8,2);
            $table->string('chave',50)->nullable();
            $table->boolean('cichk')->nullable();
            $table->boolean('negativachk')->nullable();
            $table->boolean('pagochk')->nullable();
            $table->boolean('nfchk')->nullable();
            $table->boolean('recibochk')->nullable();
            $table->boolean('atestochk')->nullable();
            $table->boolean('financeirochk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danfes');
    }
}
