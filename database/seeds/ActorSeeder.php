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
    		'bio' => 'Ryan Rodney Reynolds was born on October 23, 1976 in Vancouver, British Columbia, Canada, the youngest of four children. His father, James Chester Reynolds, was a food wholesaler, and his mother, Tammy, worked as a retail-store saleswoman. Between 1991-93, Ryan appeared in Hillside (1990), a Nickleodeon series taped in Florida with many other Canadian actors. After the series ended, he returned to Vancouver where he played in a series of forgettable television movies. He did small roles in Glenn Close\'s Serving in Silence: The Margarethe Cammermeyer Story (1995) and CBS\'s update of In Cold Blood (1996). However, his run of luck had led him to decide to quit acting.',
            'photo' => 'reynolds.jpg'
    	]);
        DB::table('actors')->insert([
            'firstname' => 'Dominic',
            'lastname' => 'Purcell',
            'gender' => 'Male',
            'birthdate' => '1970-02-17',
            'bio' => 'Born in England but raised in Australia by his Norwegian father and Irish mother, Purcell was a bored landscaper who decided to attend a drama school. He became a TV star in Australia before debuting in America as the title character in John Doe (2002). In 2000, he won the Green Card lottery and now lives in Los Angeles with his family.',
            'photo' => 'purcell.jpg'
        ]);
        DB::table('actors')->insert([
            'firstname' => 'Julie',
            'lastname' => 'Bowen',
            'gender' => 'Female',
            'birthdate' => '1970-03-03',
            'bio' => 'Julie Bowen was born in Baltimore, Maryland, and is the middle daughter of Suzanne and John Luetkemeyer Jr., a real estate developer. Her early education was at Calvert School in Baltimore, and Garrison Forest School, Maryland. She moved on to St. George\'s School, Rhode Island and then attended Brown University, graduating with a BA in Renaissance.',
            'photo' => 'bowen.jpg'
        ]);
    }
}

