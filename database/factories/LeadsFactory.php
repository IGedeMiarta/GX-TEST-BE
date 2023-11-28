<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leads>
 */
class LeadsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number'    => leadsnum(),
            'fullname'  => fake()->name(),
            'email'     => fake()->email(),
            'phone'     => fake()->phoneNumber(),
            'address'   => fake()->address(),
            'lattitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'lead_type' => rand(0,1),
            'office_id' => rand(1,5),
            'status_id' => rand(1,10),
            'probability_id'=> rand(1,3),
            'channel_id'=> 1,
            'media_id'  => 2,
            'source_id' => rand(5,6),
            'general_notes' => fake()->paragraph()
        ];
    }
}
