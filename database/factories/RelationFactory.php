<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RelationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rand1 = rand(1, 10)*10-5;
        $rand2 = rand(1, 10)*10-5;

        return [
            'first_user_id' => $rand1,
            'second_user_id' => $rand2,
        ];
    }
}
