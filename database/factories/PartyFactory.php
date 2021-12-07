<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randid = rand(1, 20)*10-5;
        $rand = rand(1, 200);


        return [
            'name' => $this->faker->realText(rand(10, 20)),
            'game_id' => $randid,
            'icon' => 'https://www.freetogame.com/g/'.$rand.'/thumbnail.jpg'   
        ];
    }
}
