<?php

namespace Database\Factories;

use App\Models\Kid;
use Illuminate\Database\Eloquent\Factories\Factory;

class KidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $varNames = array('Male','Female');
        $varPackages = array('1','2','3');
        $var = array_rand($varNames);

        return [
            'full_name' => $this->faker->name,
            'birthdate' => date("Y/m/d"),
            'no_birth_cert' => $this->faker->uuid,
            'no_mykid' => $this->faker->uuid,
            'place_birth' => $this->faker->uuid,
            'gender' => $varNames[$var],
            'photo' => $this->faker->image,
            'package_id' => $varPackages[$var],

        ];
    }
}
