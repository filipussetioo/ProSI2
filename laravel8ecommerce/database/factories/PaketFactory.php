<?php

namespace Database\Factories;

use app\Models\Paket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PaketFactory extends Factory
{
    protected $model = Paket::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = 'Paket_'.$this->faker->unique()->words($nb=1,$asText=true);
        return [
            //
            'nama_paket' => $product_name,
            'harga' => $this->faker->numberBetween(50000,50000),
            'gambar_paket' => $this->faker->unique()->numberBetween(1,22).'.jpg',
            'deskripsi' =>  $this->faker->text(50)
        ];
    }
}
