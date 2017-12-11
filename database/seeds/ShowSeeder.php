<?php

use Illuminate\Database\Seeder;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shows')->insert([
            'title' => 'Narcos',
            'releasedate' => '2015-08-28',
            'description' => 'A chronicled look at the criminal exploits of Colombian drug lord Pablo Escobar, as well as the many other drug kingpins who plagued the country 
            through the years.',
            'photo' => 'narcos.jpg',
            'trailer' => 'U7elNhHwgBU'
        ]);
        DB::table('shows')->insert([
            'title' => 'Breaking Bad',
            'releasedate' => '2011-01-19',
            'description' => 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family\'s future.',
            'photo' => 'breakingbad.jpg',
            'trailer' => 'HhesaQXLuRY'
        ]);
        DB::table('shows')->insert([
            'title' => 'Marvel\'s Luke Cage',
            'releasedate' => '2016-09-30',
            'description' => 'When a sabotaged experiment gives him super strength and unbreakable skin, Luke Cage becomes a fugitive attempting to rebuild his life in Harlem and must soon confront his past and fight a battle for the heart of his city.',
            'photo' => 'lukecage.jpg',
            'trailer' => 'ytkjQvSk2VA'
        ]);
        DB::table('shows')->insert([
            'title' => 'Brooklyn Nine-Nine',
            'releasedate' => '2014-08-24',
            'description' => 'Jake Peralta, an immature but talented NYPD detective in Brooklyn\'s 99th Precinct, comes into immediate conflict with his new commanding officer, the serious and stern Captain Ray Holt.',
            'photo' => 'brooklyn.jpg',
            'trailer' => 'sEOuJ4z5aTc'
        ]);
        DB::table('shows')->insert([
            'title' => 'Modern Family',
            'releasedate' => '2010-10-05',
            'description' => 'Three different, but related families face trials and tribulations in their own uniquely comedic ways.',
            'photo' => 'modernfamily.jpg',
            'trailer' => 'HF1Z3ZYipIE'
        ]);
        DB::table('shows')->insert([
            'title' => 'Prison Break',
            'releasedate' => '2006-03-16',
            'description' => 'Due to a political conspiracy, an innocent man is sent to death row and his only hope is his brother, who makes it his mission to deliberately get himself sent to the same prison in order to break the both of them out, from the inside.',
            'photo' => 'prisonbreak.jpg',
            'trailer' => 'AL9zLctDJaU'
        ]);
    
    }
}
