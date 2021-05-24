<?php

namespace Database\Factories;
use App\Models\Ward;
use App\Models\Lga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ward>
 */
class WardFactory extends Factory
{
    protected $model = Ward::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => $this->faker->citySuffix().' '.'ward',
            'lga_id' => $this->faker->randomElement(Lga::pluck('id'))
        ];
    }
}
