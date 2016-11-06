<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    //
    public function index(){
    	$user=User::all();
    	return $user;
    }
}
