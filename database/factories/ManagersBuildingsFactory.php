<?php

namespace Database\Factories;

use App\Models\ManagersBuildings;
use App\Models\Manager;
use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagersBuildingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ManagersBuildings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'building_id'=>Building::factory(),
            'manager_id'=>Manager::factory(),
        ];
    }
}
