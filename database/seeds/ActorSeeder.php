<?php

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('actors')->insert([
    		'firstname' => 'Ryan',
    		'lastname' => 'Reynolds',
    		'gender' => 'Male',
    		'birthdate' => '1976-11-23',
    		'bio' => 'Ryan Rodney Reynolds was born on October 23, 1976 in Vancouver, British Columbia, Canada, the youngest of four children. His father, James Chester Reynolds, was a food wholesaler, and his mother, Tammy, worked as a retail-store saleswoman. Between 1991-93, Ryan appeared in Hillside (1990), a Nickleodeon series taped in Florida with many other Canadian actors. After the series ended, he returned to Vancouver where he played in a series of forgettable television movies. He did small roles in Glenn Close\'s Serving in Silence: The Margarethe Cammermeyer Story (1995) and CBS\'s update of In Cold Blood (1996). However, his run of luck had led him to decide to quit acting.'
    	]);
    }
}

