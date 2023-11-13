<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $numeroDeCategoria = 5;

        for ($i = 0; $i < $numeroDeCategoria; $i++) {
            \DB::table('categoria')->insert([
                'nome' => $faker->nome,
            ]);
        }
    }
}
// Comando para rodar as Seeders
//php artisan db:seed --class=CategoriaeSeeder