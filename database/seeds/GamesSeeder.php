<?php

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::truncate(); // remove all existing records

        Game::create([
        	'name' 			=> 'Call of Duty: Modern Warfare',
        	'publisher' 	=> 'Activision',
        	'release_date' 	=> '12am UTC, 25th October 2019',
        	'enc_key' 		=> 'cod.master_1234'
        ]);

        Game::create([
        	'name'			=> 'Code Vein',
        	'publisher'		=> 'Bandai Namco Entertainment',
        	'release_date'	=> '1am UTC, 27th September 2019',
        	'enc_key'		=> 'master_bandai_483'
        ]);

        Game::create([
        	'name'			=> 'Gears 5',
        	'publisher'		=> 'Xbox Game Studios',
        	'release_date'	=> '12am UTC, 10th September 2019',
        	'enc_key'		=> 'msoft_5gear_key_1'
        ]);

        Game::create([
        	'name'			=> 'Star Wars Jedi: Fallen Order',
        	'publisher'		=> 'Electronic Arts',
        	'release_date'	=> '2am UTC, 15th November 2019',
        	'enc_key'		=> 'eagames_skeleton_key'
        ]);

        Game::create([
        	'name'			=> 'FIFA 20',
        	'publisher'		=> 'Electronic Arts',
        	'release_date'	=> '3am UTC, 27th September 2019',
        	'enc_key'		=> 'eagames_skeleton_key'
        ]);
    }
}
