<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        $national = [
          "American","France","Germany","English","Italy"
        ];


        return [
            'name'=>$this->faker->name(),
            'nationality'=>$national[random_int(0,4)],
            'date_of_birth'=>$this->faker->date('Y-m-d'),
            'img'=>$this->faker->imageUrl(),
            'description'=>$this->faker->realText(400,3),
            'number'=>random_int(0,99),
            'height'=>random_int(170,190),
            'weight'=>random_int(60,90),
        ];
    }
}
