<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
   
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'category_id' => \App\Models\Category::factory(),
            'img' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'is_active' => $this->faker->boolean(80), // 80% chance of being true         
        ];
    }
}
