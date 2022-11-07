<?php

namespace Database\Factories;

use app\Models\Promo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PromoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = 'Promo '.$this->faker->unique()->words($nb=1,$asText=true);
        return [
            //
            'nama_promo' => $product_name,
            'potongan_promo' => $this->faker->randomFloat(2,0,1),
            'deskripsi_promo'=> $this->faker->text(50),
            'kode_promo'=> $this->faker->text(5),
            'tanggal_mulai'=> '2022_11_07',
            'tanggal_selesai'=> '2022_12_12',
            'tp_id'=> $this->faker->numberBetween(1,2)
        ];
    }
}
