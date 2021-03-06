<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Problem;
class DeppartmentHasProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => User::where("role","user")->get()->random()->id,
            "problem_id" => Problem::all()->random()->id
        ];
    }
}
