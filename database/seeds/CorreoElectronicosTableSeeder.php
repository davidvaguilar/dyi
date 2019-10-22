<?php

use Illuminate\Database\Seeder;
use App\CorreoElectronico;

class CorreoElectronicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CorreoElectronico::class, 3)->create();
    }
}
