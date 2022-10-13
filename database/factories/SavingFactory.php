<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saving>
 */
class SavingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = $this->faker->numberBetween($min = 1, $max = 100);
        // $user = $this->faker->randomDigitNot(0);
        return [
            'user_id_name' => $user,
            'user_id_amount' => $user,
            'pay_amount' => $this->faker->numberBetween($min = 1, $max = 12),
            'total_save' => $this->faker->numberBetween($min = 100000, $max = 10000000)
        ];
    }
}
