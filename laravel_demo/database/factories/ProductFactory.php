<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition()
    {
        return [
            'name' => "Demo Cloths-".Str::random(10),
            'image' =>$this->faker->randomElement($array = array ('latest1.png','latest2.png','latest3.png','popular1.png','popular2.png','popular3.png')),
            'type' => $this->faker->numberBetween(0,1),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
            'discount' => $this->faker->randomElement($array = array(0,47,56)),
        ];
    }
}
