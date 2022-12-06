<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = 'Menu_'.$this->faker->unique()->words($nb=1,$asText=true);
        return [
            'nama_menu' => $product_name,
            'deskripsi' =>  $this->faker->text(50),
            'gambar_menu' => $this->faker->unique()->numberBetween(1,22).'.jpg',
            'terjual' => $this->faker->numberBetween(1,100)
        ];
    }
}
