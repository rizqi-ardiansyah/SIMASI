<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PoskoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(\App\Posko::class, 10)->create();
        \App\Models\Posko::factory(10)->create();
    }
}
