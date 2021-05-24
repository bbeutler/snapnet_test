<?php

namespace Database\Factories;

use App\Models\Citizen;
use App\Models\Ward;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    protected $model = Citizen::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name'    => $this->faker->firstNameFemale().' '.$this->faker->lastName(),
            'gender'  => 'female',
            'address' => $this->faker->streetAddress(),
            'phone'   => $this->faker->e164PhoneNumber(),
            'ward_id' => $this->faker->randomElement(Ward::pluck('id'))

        ];
    }
}
