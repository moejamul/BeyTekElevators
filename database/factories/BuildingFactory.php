<?php

namespace Database\Factories;

use App\Models\Building;

use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Building::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'floors' => $this->faker->numberBetween(10,20),
            'contact_number'=> $this->faker->phoneNumber,
            
        ];

    }
}
