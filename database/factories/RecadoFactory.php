<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Recado;
use Illuminate\Database\Eloquent\Factories\Factory;


class RecadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recado::class;

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
            'status' => $this->faker->boolean,
            'slug' => $this->faker->slug
            
        ];
    }
}
