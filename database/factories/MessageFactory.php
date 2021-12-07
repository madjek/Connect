<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){

        $rand = rand(1, 10)*10-5;
        $randp = rand(1, 50)*10-5;

        return [
            'content' => $this->faker->realText(rand(10, 100)),
            'user_id' => $rand,
            'party_id' => $randp,
            'created_at' => $this->faker->dateTimeBetween('-3 days', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 days', 'now')
        ];
    }
}
