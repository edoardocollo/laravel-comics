<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Artist;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
          $newArtist = new Artist;
          $newArtist->nome = $faker->name();
          $newArtist->save();
        }
    }
}
