<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Questionset;



class QuestionsetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
    	$questionsets = Questionset::orderBy('id','asc')->get();
    	return view('backend.pages.questionsets.index',compact('questionsets') );
    }

    public function create(){
    	return view('backend.pages.questionsets.create');
    }

    public function edit($id){

        $questionset = Questionset::find($id);
        if(!is_null($questionset)){
            return view('backend.pages.questionsets.edit', compact('questionset'));
        }else{
            return redirect()->route('admin.questionsets');
        }
    }

    public function store(Request $request ){
    	$this->validate($request, 
    		[
    			'title' => 'required'
    		],
    		[
    			'title.required' => 'Please provide question set',
    		]

    	);
    	
    	$questionset 				= new Questionset;
        $questionset->title         = $request->title;
        $questionset->save();

    	session()->flash('success','A new questionset has added successfully!');
    	return redirect()->route('admin.questionsets');

    }

    public function update(Request $request, $id ){
        $this->validate($request, 
            [
                'title' => 'required'
            ],
            [
                'title.required' => 'Please provide question set',
            ]);
        $questionset       = Questionset::find($id);
        $questionset->title         = $request->title;
        $questionset->save();

        session()->flash('success','Question set updated!');
        return redirect()->route('admin.questionsets');

    }

    public function delete($id){
       $questionset  = Questionset::find($id);

       if(!is_null($questionset)){
        $questionset->delete();
       }
       session()->flash('success', 'Questions et has deleted successfully!!');
       return back();
    }
}
