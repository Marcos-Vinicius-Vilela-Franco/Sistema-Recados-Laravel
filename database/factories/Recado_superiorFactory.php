<?php

namespace Database\Factories;

use App\Models\Recado_superior;
use Illuminate\Database\Eloquent\Factories\Factory;

class Recado_superiorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recado_superior::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'priori'=> $this->faker->boolean,
            'recado'=> $this->faker->paragraph(5, true),
            'slug' => $this->faker->slug,
        ];
    }
}
