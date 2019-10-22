<?php

use Illuminate\Database\Seeder;
use App\Domicilio;

class DomiciliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Domicilio::class, 5)->create();
    }
}
