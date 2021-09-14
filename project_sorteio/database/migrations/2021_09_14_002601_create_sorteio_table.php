<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSorteioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteio', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->string("quantidade");
            $table->string("valor");
            $table->string("porcentagem");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorteio');
    }
}
