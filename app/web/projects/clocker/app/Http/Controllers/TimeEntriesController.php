<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\TimeEntries;
use App\Http\Requests;

class TimeEntriesController extends Controller
{
    public function index()
    {
        $time = TimeEntries::with('user')->get();

        return $time;
    }
    public function store(Request $request)
	{
	    //return var_dump($request);

	    

	}
	public function update($id)
	{
	    $timeentry = TimeEntries::find($id);
	    
	    $data = Request::all();

	    $timeentry->fill($data);

	    $timeentry->save();
	        
	}
	public function destroy($id)
	{
	    $timeentry = TimeEntries::find($id);

	    $timeentry->delete();   
	}
}
