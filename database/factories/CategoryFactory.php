<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Category::class;

    public function definition()
    {
        $categories = ['Comedy', 'Romance', 'Religion', 'Politics', 'Education', 'Business'];
        return [
            'category'          => $this->faker->randomElement($categories),
            'remarks'           => $this->faker->sentence(),
        ];
    }
}
