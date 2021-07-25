<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

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
        'sex' => $this->faker->word,
        'address' => $this->faker->word,
        'address_number' => $this->faker->word,
        'complement' => $this->faker->word,
        'neighborhood' => $this->faker->word,
        'city' => $this->faker->word,
        'state' => $this->faker->word,
        'zipcode' => $this->faker->word,
        'document' => $this->faker->word,
        'phone_numer' => $this->faker->word,
        'employee_type' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
