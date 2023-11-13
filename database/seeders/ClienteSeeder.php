<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $numeroDeCliente = 10;

        for ($i = 0; $i < $numeroDeCliente; $i++) {
            \DB::table('cliente')->insert([
                'nome' => $faker->name,
                'email' => $faker->email,
                'tel'=> $faker->phoneNumber,
                'endereco' => $faker->streetAddress
            ]);
        }
    }
}
// Comando para rodar as Seeders
//php artisan db:seed --class=AutoresTableSeeder