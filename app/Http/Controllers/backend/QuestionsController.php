<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Questionset;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$questions = Question::orderBy('id','desc')->get();
    	return view('backend.pages.questions.index',compact('questions') );
    }

    public function create(){
        $questionsets = Questionset::orderBy('id','asc')->get();
        return view('backend.pages.questions.create', compact('questionsets'));
    }

    public function edit($id){

        $question = Question::find($id);
        $questionsets = Questionset::orderBy('id','asc')->get();
        if(!is_null($question)){
            return view('backend.pages.questions.edit', compact('question','questionsets'));
        }else{
            return redirect()->route('admin.questions');
        }
    }

    public function store(Request $request ){
    	$this->validate($request, 
    		[
    			'title' => 'required',
    			'questionset_id' => 'required'
    		],
    		[
    			'title.required' => 'Please provide question title',
    			'questionset_id.required' => 'Please select question set'
    		]

    	);
    	
    	$question 				= new Question;
        $question->title         = $request->title;
        $question->questionset_id   = $request->questionset_id;
        $question->save();

        session()->flash('success','A new question has added successfully!');
        return redirect()->route('admin.questions');

    }

    public function update(Request $request, $id ){
        $this->validate($request, 
            [
                'title' => 'required',
                'questionset_id' => 'required'
            ],
            [
                'title.required' => 'Please provide question title',
                'questionset_id.required' => 'Please select question set'
            ]);
        $question       = Question::find($id);
        $question->title         = $request->title;
        $question->questionset_id     = $request->questionset_id;

        $question->save();

        session()->flash('success','Question updated!');
        return redirect()->route('admin.questions');

    }

    public function delete($id){
     $question  = Question::find($id);

     if(!is_null($question)){
        $question->delete();
    }
    session()->flash('success', 'question has deleted successfully!!');
    return back();
}
}
