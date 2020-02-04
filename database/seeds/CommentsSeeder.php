<?php

use Illuminate\Database\Seeder;
use App\Models\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comments::truncate(); // remote all existing records

        Comments::create([
        	'user_id'	=> '1',
        	'game_id'	=> '1',
        	'comment'	=> 'Looks better than the original but isn\'t as good. Not worth the money.'
        ]);

        Comments::create([
        	'user_id'	=> '3',
        	'game_id'	=> '1',
        	'comment'	=> 'Was hoping for something more.'
        ]);

        Comments::create([
        	'user_id'	=> '2',
        	'game_id'	=> '4',
        	'comment'	=> 'Amazing. Can\'t get enough of Star Wars, and this is the best
installment yet.'
        ]);
    }
}
