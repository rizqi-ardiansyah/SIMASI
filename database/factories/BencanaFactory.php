<?php

namespace Database\Factories;

use App\Models\Bencana;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BencanaFactory extends Factory
{
    protected $model = Bencana::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->firstNameMale(),
            'tanggal' => $this->faker->date(),
            'waktu' => $this->faker->time(),
            'lokasi' => $this->faker->city(),
            'korban' => $this->faker->randomDigit(),
            'kerusakan' => $this->faker->sentence(),
            'posko_id' => $this->faker->numberBetween(11, 22)
        ];
    }
}
