<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LeagueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $league=[
          'World Cup',"Euro league" ,"League Cup","Copa Argentina"
        ];

        return [
            'country'=>$this->faker->country(),
            'logo'=>$this->faker->imageUrl(),
            'description'=>$this->faker->realText(600,3),
            'role_des'=>$this->faker->realText(600,3),
        ];
    }
}
