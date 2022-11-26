<?php

namespace Database\Factories;

use App\Models\Posko;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoskoFactory extends Factory
{
    protected $model = Posko::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provinsi' => $this->faker->state(),
            'kota' => $this->faker->city(),
            'kecamatan' => $this->faker->citySuffix(),
            'kelurahan' => $this->faker->cityPrefix(),
            'detail' => $this->faker->streetSuffix(),
            'namaPosko' => $this->faker->streetName(),
        ];
    }
}
