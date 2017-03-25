<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
             $table->integer('cidade_id')->unsigned();
             $table->foreign('cidade_id')
      ->references('id')->on('cidades')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            //
        });
    }
}
