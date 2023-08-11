<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LeagueSeasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'season'=>'2023',
            'started_at'=>$this->faker->date(),
            'description'=>$this->faker->realText(500,3),
            'round'=>16,
        ];
    }
}
