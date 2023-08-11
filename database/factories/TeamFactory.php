<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> "Team " . $this->faker->lastName().random_int(0,100),
            'logo'=>$this->faker->imageUrl(),
            'level'=>random_int(0,1),
        ];
    }
}
