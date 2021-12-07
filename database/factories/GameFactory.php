<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){

        $rand = rand(1, 200);

        return [
            'title' => $this->faker->realText(rand(10, 20)),
            'poster' => 'https://www.freetogame.com/g/'.$rand.'/thumbnail.jpg',
            'url' => 'https://www.freetogame.com/g/'.$rand.'/thumbnail.jpg',        
        ];
    }
}
