<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $hasAdmin = false;
        $hasRole = fake()->numberBetween($min = 1, $max = 3);

        // $role_ids = DB::table('users')->get('hasRole');
        // foreach($role_ids as $role_id){
        //     if($role_id->hasRole == 1){
        //         $hasAdmin = true;
        //         $hasRole = fake()->shuffle([2, 3]);
        //     }
        // }
        
        return [
            'IDCS' => fake()->randomNumber($nbDigits = 2, $strict = true),
            'IDREG' => fake()->randomNumber($nbDigits = 2, $strict = true),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => 'h36h73hf486$#', 
            'firstname' => fake()->firstName(),    
            'lastname' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'hasAdmin' => $hasAdmin,
            'hasRole' => $hasRole,
            'remember_token' => Str::random(10),
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}