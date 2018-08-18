<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   //Dodavanje kategorija
        DB::table('kategorijas')->insert([
            'naziv' => 'Odeca'
        ]);
        DB::table('kategorijas')->insert([
            'naziv' => 'Obuca'
        ]);
        DB::table('kategorijas')->insert([
            'naziv' => 'Aksesoari'
        ]);
        
        //Dodavanje admina
        DB::table('users')->insert([
           'name' => 'Luka Milisavljevic',
           'email' => 'lukamilisavljevic@gmail.com',
           'role' => 'admin',
           'stanjeRacuna' => 0
        ]);
    }
}
