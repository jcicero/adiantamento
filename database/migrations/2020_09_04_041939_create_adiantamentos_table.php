<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdiantamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adiantamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('responsavel');
            $table->string('processo',30);
            $table->double('valor',8,2);
            $table->date('data');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adiantamentos');
    }
}
