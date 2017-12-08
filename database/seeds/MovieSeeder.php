<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Schindlers list',
            'releasedate' => '1994-03-11',
            'description' => 'In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazi Germans.',
            'photo' => 'schindlerslist.jpg',
            'trailer' => 'M5FpB6qDGAE'
        ]);
        DB::table('movies')->insert([
            'title' => 'Fight Club',
            'releasedate' => '1999-03-03',
            'description' => 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soap maker, forming an underground fight club that evolves into something much, much more.',
            'photo' => 'fightclub.jpg',
            'trailer' => 'SUXWAEX2jlg'
        ]);
        DB::table('movies')->insert([
            'title' => 'Inception',
            'releasedate' => '2010-06-16',
            'description' => 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.',
            'photo' => 'inception.jpg',
            'trailer' => 'YoHD9XEInc0'
        ]);
        DB::table('movies')->insert([
            'title' => 'Goodfellas',
            'releasedate' => '1990-11-02',
            'description' => 'The story of Henry Hill and his life through the teen years into the years of mafia, covering his relationship with wife Karen Hill and his Mob partners Jimmy Conway and Tommy DeVitto in the Italian-American crime syndicate.',
            'photo' => 'goodfellas.jpg',
            'trailer' => 'qo5jJpHtI1Y'
        ]);
        DB::table('movies')->insert([
            'title' => 'Se7en',
            'releasedate' => '1995-11-09',
            'description' => 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.',
            'photo' => 'se7en.jpg',
            'trailer' => 'znmZoVkCjpI'
        ]);
        DB::table('movies')->insert([
            'title' => 'Saving Private Ryan',
            'releasedate' => '2017-09-17',
            'description' => 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.',
            'photo' => 'savingblabla.jpg',
            'trailer' => 'zwhP5b4tD6g'
        ]);
    }
}
