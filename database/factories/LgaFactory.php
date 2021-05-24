<?php

namespace Database\Factories;
use App\Models\State;
use App\Models\Lga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lga>
 */
class LgaFactory extends Factory
{
    protected $model = Lga::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'     => $this->faker->city().' '.'east',
            'state_id' => $this->faker->randomElement(State::pluck('id'))
        ];
    }
}
