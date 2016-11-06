<?php

namespace App\Http\Controllers;
use App\Comment;
use Log;
//use App\Repositories\CommentRepository;
use Illuminate\Http\Request;
use App\Http\Requests;


class CommentController extends Controller
{
    public function getall(){

    	return Comment::get();

    }
    public function store(Request $request){

        //echo $_POST[''];
    	Comment::create([
    		'author'=>$request->author,
    		'text'=>$request->text
    	]);
        //echo $request;
        //echo $request->author;
    	//return ($request->author);
    

    }
    public function deletecomment($id){
    	Comment::destroy($id);
        Log::warning('Something could be going wrong.');
    	return (array('success'=>true));
    }

}
