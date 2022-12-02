<?php

namespace Database\Seeders;

use App\Models\Bencana;
use Illuminate\Database\Seeder;

class BencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Bencana::factory(10)->create();
    }
}
