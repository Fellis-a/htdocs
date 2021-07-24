<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach(App\Posts::all() as $post) {
           foreach(App\Tags::all() as $tag) {
               if (rand(1, 20) == 10) {
                   $post->tags()->attach($tag->id);
               }
           }
       }
    }
}
