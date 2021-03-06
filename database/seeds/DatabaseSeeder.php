<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(ActorSeeder::class);     
        $this->call(RoleSeeder::class); 
        $this->call(ShowSeeder::class); 
        $this->call(SeasonSeeder::class);
    }
}
