<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1;
        return [
                    'name' => $this->faker->name(),
                    'role'=> 'Developer',
                    'weekly_work_hours' => '45',
                    'seniority' => $order++
                ];
    }
}
