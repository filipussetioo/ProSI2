<?php

namespace Database\Factories;

use app\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = 'Paket_'.$this->faker->unique()->words($nb=1,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' =>$slug,
            'description' => $this->faker->text(50),
            'regular_price' => $this->faker->numberBetween(50000,70000),
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => $this->faker->unique()->numberBetween(1,5).'.jpg',
            /**'category_id' => $this->faker->numberBetween(1,5)**/
        ];
    }
}
