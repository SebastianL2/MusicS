<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listener>
 */
class ListenerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this -> faker ->name(),
            'email' => $this -> faker ->name(),
            'phone' => $this -> faker ->e164PhoneNumber
        ];
    }
}
