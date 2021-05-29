<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teacher', function(Blueprint $table) {
    
      $table->increments('id_teach');
      $table->string('fio', 64);
      $table->string('password', 12);
      $table->string('login', 30);
      $table->string('link', 100);
      $table->text('information');

      $table->index(['id_teach', 'fio'],'using');

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
        Schema::dropIfExists('teacher');
    }
}
