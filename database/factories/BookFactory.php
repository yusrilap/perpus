<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;

class BookFactory extends Factory
{
    public function definition(): array
    {
        $randomNumber = rand(1, 100);
        $cover = "https://picsum.photos/id/{$randomNumber}/200/300";

        return [
            'author_id' => Author::inRandomOrder()->first()?->id ?? Author::factory(),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(4),
            'cover' => $cover,
            'qty' => $this->faker->numberBetween(10, 20),
        ];
    }
}
