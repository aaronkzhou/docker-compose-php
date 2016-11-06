<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Timeentries;

class TimeEntriesController extends Controller
{
    //
    public function index(){

    	$time=Timeentries::with('user')->get();
    	return $time;

    }
    public function store(Request $request)
	{
	    // $data = Request::all();

	    // $timeentry = new TimeEntries();

	    // $timeentry->fill($data);

	    // $timeentry->save();
	    //return "test";
	    //echo $request;
	    Timeentries::create(array(
	    	'user_id' => $request->user_id, 
	    	'start_time'=>$request->start_time,
	    	'end_time'=>$request->end_time,
	    	'comment'=>$request->comment
	    	));
	    echo "this kind of request also works";

	}
	public function update($id){
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
