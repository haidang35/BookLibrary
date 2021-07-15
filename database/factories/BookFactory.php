<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "author_id" => rand(1, 50),
            "title" => $this->faker->streetName(),
            "ISBN" => "TCVN 6380:2007",
            "pub_year" => $this->faker->year,
            "available" => rand(10, 100)

        ];
    }
}
