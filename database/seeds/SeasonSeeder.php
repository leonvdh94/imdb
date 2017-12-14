<?php

use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('seasons')->insert([
        'show_id' => '1',
        'title' => 'Season 1',
    ]);     
     DB::table('seasons')->insert([
        'show_id' => '1',
        'title' => 'Season 2',
    ]);     
      DB::table('seasons')->insert([
        'show_id' => '2',
        'title' => 'Season 1',
    ]);     
       DB::table('seasons')->insert([
        'show_id' => '2',
        'title' => 'Season 2',
    ]);     
        DB::table('seasons')->insert([
        'show_id' => '2',
        'title' => 'Season 3',
    ]);     
         DB::table('seasons')->insert([
        'show_id' => '3',
        'title' => 'Season 1',
    ]);     
          DB::table('seasons')->insert([
        'show_id' => '3',
        'title' => 'Season 2',
    ]);     
           DB::table('seasons')->insert([
        'show_id' => '3',
        'title' => 'Season 3',
    ]);     
            DB::table('seasons')->insert([
        'show_id' => '3',
        'title' => 'Season 4',
    ]);     
             DB::table('seasons')->insert([
        'show_id' => '4',
        'title' => 'Season 1',
    ]);   
       DB::table('seasons')->insert([
        'show_id' => '4',
        'title' => 'Season 2',
    ]);   
       DB::table('seasons')->insert([
        'show_id' => '5',
        'title' => 'Season 1',
    ]);   
       DB::table('seasons')->insert([
        'show_id' => '6',
        'title' => 'Season 1',
    ]);   
       DB::table('seasons')->insert([
        'show_id' => '6',
        'title' => 'Season 2',
    ]);   
       DB::table('seasons')->insert([
        'show_id' => '6',
        'title' => 'Season 3',
    ]);     
   }
}
