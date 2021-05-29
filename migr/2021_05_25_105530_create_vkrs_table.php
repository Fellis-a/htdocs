<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVkrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vkr', function(Blueprint $table) {

  		    $table->increments('id_vkr');
  		    $table->integer('year',);
  		    $table->string('title', 120);
  		    $table->string('mark', 20);
  		    $table->text('essay');
  		    $table->string('tech', 64);
  		    $table->integer('id_teach')->unsigned();
  		    $table->integer('id_spec');

  		    $table->index('id_teach','id_tech');


  		    $table->foreign('id_teach')
  		        ->references('id_teach')->on('teacher');

  		    $table->timestamps();

  		});
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vkr');
    }
}
