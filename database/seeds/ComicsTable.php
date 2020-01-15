<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $ComicsArray = [
                'titolo' => $faker->word,
                'autore' => $faker -> name,
                'anno' => $faker -> year,
                'recensioneEvoto' => $faker -> text
            ];

            $comic = new Comic;
            $comic -> fill($ComicsArray);
            $comic -> save();
        }
    }
}
