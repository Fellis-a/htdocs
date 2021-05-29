<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVkrTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vkr_tags', function(Blueprint $table) {
      $table->engine = 'InnoDBAUTO_INCREMENT';

      $table->increments('id_vkr_tags');
      $table->integer('id_vkr')->unsigned();
      $table->integer('id_tags')->unsigned();

      $table->index('id_vkr','vkr_tags_1');
      $table->index('id_tags','vkr_tags_2');

      $table->foreign('id_vkr')
          ->references('id_vkr')->on('vkr');

      $table->foreign('id_tags')
          ->references('id_tag')->on('tag');

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
        Schema::dropIfExists('vkr_tags');
    }
}
