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
        'title' => 'season 1',
    ]);     
     DB::table('seasons')->insert([
        'show_id' => '1',
        'title' => 'Season 2',
    ]);

 }
}
