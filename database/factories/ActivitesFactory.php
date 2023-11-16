<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activites;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activites>
 */
class ActivitesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'departmemntID' => $this->faker->numerify,
                'name' => $this->faker->name(),
                'descrition' =>   $this->faker->paragraph(),
                'date' => $this->faker->date(),
                'location' => $this->faker->name(),
                'MaxPartcipants' => $this->faker->numerify(),
                'deadline' => $this->faker->date(),
                'RegistrationCode' => $this->faker->numerify(),

        ];
    }
}
