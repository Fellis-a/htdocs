<?php

namespace Database\Factories;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $factory->define(Comments::class, function (Faker $faker) {
        return [
            'post_id' => rand(1, 50),
            'user_id' => rand(1, 10),
            'content' => $faker->realText(rand(200, 500)),
            'created_at' => $faker->dateTimeBetween('-200 days', '-50 days'),
            'updated_at' => $faker->dateTimeBetween('-40 days', '-1 days'),
            'published_by' => rand(1, 3), // супер-админ или просто админ
        ];
      });
    }
}
