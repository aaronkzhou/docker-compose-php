<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
* test controller
*/
class testController extends Controller
{
	
	public function getShit(){
		$shit="life is a constant struggle";
		$shit1=false;
		return view('aarontest.test')
		->with('shit1',$shit)
		->with('shit2',$shit1);
	}
	public function getIndex(){
		return "testjklj";
	}
}



