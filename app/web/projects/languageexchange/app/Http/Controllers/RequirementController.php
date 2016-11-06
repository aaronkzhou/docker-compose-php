<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\requirement;
use App\Repositories\RequirementRepository;
use Log;
use Mail;
use Illuminate\Contracts\Mail\Mailer;

class RequirementController extends Controller
{

    //protected $requirements;

    public function __construct(RequirementRepository $requirements)
    {
        $this->middleware('auth');
        //$this->requirements=$requirements;
    }
    public function welcome(Request $request)
    {
        $this->middleware('auth');
        $user=$request->user()->id;
        return view('index')
        ->with('user',$user);
    }
    public function welcome1()
    {
        return "hello";
    }
    public function store(Request $request)
    {
        requirement::create(array(
                'name'=>$request->name,
                'age'=>$request->age,
                'location'=>$request->location,
                'sex'=>$request->sex,
                'mainlang'=>$request->mainlang,
                'practicelang'=>$request->practicelang,
                'description'=>$request->description,
                'user_id'=>$request->user()->id
            ));
        return redirect('/');
    }
    public function index(Request $request){

        $requirementexistence=requirement::where('user_id',($request->user()->id))->count();
        //($request->user()->id)
    	return view('requirements.index')
        ->with('requirementexistence',$requirementexistence);
    }

    public function updatepersonalinfo(Request $request){

        requirement::where('user_id',$request->user()->id)
                    ->update(array(
                        'name'=>$request->name,
                        'age'=>$request->age,
                        'location'=>$request->location,
                        'sex'=>$request->sex,
                        'mainlang'=>$request->mainlang,
                        'practicelang'=>$request->practicelang,
                        'description'=>$request->description
                    ));
        $file=$request->file;
        Storage::disk('public')->move($file,'Contents');
        return redirect('/');
    }
    public function getalloverallinfo(){
        return requirement::all();
    }
    public function getspecifyinfo($id){
       return response()->json(requirement::where('user_id',$id)->get());
    }
    public function mail(){
        return view()->make("mail.index");
    }
    public function send()
    {
        Log::info("Request cycle without Queues started");
        Mail::send('mail.welcome', ['data'=>'data'], function ($message) {

            $message->from('aaaron.chou@gmdfsail.com', 'fuck off mail system');
            $message->to('aaaron.chou@gmaidddl.com');

        });
        Log::info("Request cycle without Queues finished");
    }
    public function sendQueue()
    {
         Log::info("Request Cycle with Queues Begins");
        $this->dispatch((new SendWelcomeEmail())->delay(60 * 5));
        Log::info("Request Cycle with Queues Ends");
    }

}

