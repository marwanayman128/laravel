<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accommodation>
 */
class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_type' => $this->faker->randomElement(['hotel', 'motel', 'aparthotel', 'holiday park', 'apartment', 'guesthouse', 'resort']),
            'area' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 50, 500), // Adjust the price range as needed
            'hotel_class' => $this->faker->numberBetween(1, 5),
            'features' => $this->faker->randomElements(['internet', 'swimming pool', 'airport transportation', 'free parking', '24 hour front desk', 'air conditioning', 'free breakfast'], $this->faker->numberBetween(1, 3)),

        ];
    }
}
