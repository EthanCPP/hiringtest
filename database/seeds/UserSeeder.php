<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); // remote all existing records

        User::create([
        	'name'	=> 'Dave Clark',
        	'email'	=> 'dave.clark@intelligencefusion.co.uk'
        ]);

        User::create([
        	'name'	=> 'Patricia Summer',
        	'email'	=> 'patricia.summer@intelligencefusion.co.uk'
        ]);

        User::create([
        	'name'	=> 'Thomas Jeffrey',
        	'email'	=> 't.j@intelligencefusion.co.uk'
        ]);
    }
}
