<?php

use App\Comment;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Comments table seeder 
    	DB::table('comments')->delete();
    	Comment::create(array(
    		'author' => 'chris sevilleja',
    		'text'=>'look, i am a test comment'
    	 ));
    	Comment::create(array(
    		'author'=>'aaron chou',
    		'text'=>'hey this guy is going to new zealand'
    	));
    	Comment::create(array(
    		'author'=>'yvonne jia',
    		'text'=>'hey this girl is going to new zelaland too'
    	));
    }

}

