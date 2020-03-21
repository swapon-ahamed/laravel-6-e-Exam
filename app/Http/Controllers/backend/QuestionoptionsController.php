<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Questionoption;
use App\Models\Questionset;

class QuestionoptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$questions = Question::orderBy('id','asc')->get();
    	return view('backend.pages.questionoptions.index',compact('questions') );
    }

    public function create(){
        $questions = Question::orderBy('id','asc')->get();
        return view('backend.pages.questionoptions.create', compact('questions'));
    }


    public function store(Request $request ){

        // var_dump($request->correct);die();
    	$this->validate($request, 
    		[
    			'question_id' => 'required',
    			'option' => 'required',
                'correct' => 'required'
    		],
    		[
    			'question_id.required' => 'Please select question',
    			'option.required' => 'Please provide question option',
                'correct.required' => 'Please choose right answer'
    		]

    	);
    	
    	// var_dump($request->option);die();
        foreach ($request->option as $key => $value) {
            $Questionoption                 = new Questionoption;
            $Questionoption->question_id         = $request->question_id;
            $Questionoption->title   = $value;
            $Questionoption->correct = ($key == $request->correct) ? 1: NULL;
            $Questionoption->save();
        }


        session()->flash('success','A new question option has added successfully!');
        return redirect()->route('admin.questionoptions');

    }


    public function delete($id){
     $questionOptions  = Questionoption::where('question_id', $id)->get();

     if(!is_null($questionOptions)){
        foreach ($questionOptions as $questionOption) {
            $id = $questionOption->id;
            $questionOption = Questionoption::find($id);
            $questionOption->delete();

        }
    }
    session()->flash('success', 'Question options have deleted successfully!!');
    return back();
}
}
