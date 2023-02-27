<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function Psy\debug;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // The algo below is made to generate randomly a binary stirng
        $bin = '';
        $i = 0;
        while($i < fake()->randomNumber(2)){
            $bin .= intval(fake()->boolean);
            $i++;
        }

        return [
            'details' => fake()->name(),
            'attachment' => $bin,
            'created_by' => fake()->name(),
            'Hospital' => fake()->name(),
            'patient_id'=> fake()->numberBetween($min = 1, $max = 3),
            'status'=> fake()->boolean,
            'responsible_id' => fake()->numberBetween($min = 1, $max = 3)
        ];
    }
}