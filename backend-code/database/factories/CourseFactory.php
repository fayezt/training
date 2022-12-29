<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->sentence(1),
            'description'=>$this->faker->text,
            'price'=>$this->faker->numberBetween(100,1000),
            'category_id'=>Category::inRandomOrder()->first()->id
        ];
    }
}
