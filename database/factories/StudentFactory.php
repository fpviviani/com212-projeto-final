<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'birthdate' => $this->faker->word,
        'registration_number' => $this->faker->word,
        'address' => $this->faker->word,
        'address_number' => $this->faker->word,
        'complement' => $this->faker->word,
        'neighborhood' => $this->faker->word,
        'city' => $this->faker->word,
        'state' => $this->faker->word,
        'zipcode' => $this->faker->word,
        'sex' => $this->faker->word,
        'document' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'subjects' => $this->faker->word,
        'responsible_name' => $this->faker->word,
        'responsible_document' => $this->faker->word,
        'responsible_phone_number' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
