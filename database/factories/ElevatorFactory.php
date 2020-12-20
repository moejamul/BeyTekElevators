<?php

namespace Database\Factories;

use App\Models\Elevator;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;


class ElevatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Elevator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'index' => $this->faker->numberBetween(10,20),
            'name' => $this->faker->name,
            'building_id'=>Building::factory(),
            
        ];
    }
}
