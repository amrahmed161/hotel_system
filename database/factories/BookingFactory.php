<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;
    public function definition(): array
    {
        return [
            'user_id'=> user::factory(),
            'booking_date'=> $this->faker->date(),
            'room'=> $this->faker->randomElement(['101','102','103','104']),
            'nights'=> $this->faker->numberBetween('1,5'),
            'price'=> $this->faker->randomFloat('2','100','1000')
        ];
    }
}
