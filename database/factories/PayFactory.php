<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(),
            'user_id' => User::factory()->create(),id,
            'type_id' => Type::factory()->create(),id,
            'history_id' => Histor
        ];
    }
}
