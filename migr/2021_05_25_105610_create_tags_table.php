<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tag', function(Blueprint $table) {
		    $table->engine = 'InnoDBAUTO_INCREMENT';

		    $table->increments('id_tag');
		    $table->string('title', 45);
		    $table->string('note', 255);

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
        Schema::dropIfExists('tag');
    }
}
