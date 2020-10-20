<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guardian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'relationship_status' => $this->faker->colorName,
            'ic_no' => $this->faker->uuid,
            'phone_no' => $this->faker->phoneNumber,
            'user_id' => '1',

        ];
    }
}
