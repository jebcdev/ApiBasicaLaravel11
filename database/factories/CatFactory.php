<?php

namespace Database\Factories;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $breeds=Breed::query()->pluck('id')->toArray();
        return [
            'breed_id'=>$this->faker->randomElement($breeds),
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence,
        ];
    }
}
