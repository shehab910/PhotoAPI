<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $imagePath =  $this->faker->imageUrl(640, 480, $name, true);
        $desc = $this->faker->text(20);
        return [
            'name' => $name,
            'description' => $desc,
            'photo' => $imagePath,
        ];
    }
}
