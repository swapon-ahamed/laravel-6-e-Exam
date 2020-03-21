<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Questionset;
use App\Models\Sclass;
use App\Models\Section;
use App\Models\sectionquestionset;

use DB;
// use App\Quotation;

class SectionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $sectionquestionsets = DB::table('sectionquestionsets')
           ->select('sclass_id')
           ->groupBy('sclass_id')
           ->get();
    	return view('backend.pages.sections.index',compact('sectionquestionsets') );
    }

    public function create(){
        $classes = Sclass::orderBy('id','asc')->get();
        $questionsets = Questionset::orderBy('id','asc')->get();
        return view('backend.pages.sections.create', compact('questionsets','classes'));
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
    			'questionset_id' => 'required',
    			'sclass_id' => 'required'
    		],
    		[
    			'questionset_id.required' => 'Please select question set',
    			'sclass_id.required' => 'Please select class'
    		]

    	);

        $secQsets  = Sectionquestionset::orderBy('id','asc')
                    ->where('questionset_id', $request->questionset_id)
                    ->where('sclass_id', $request->sclass_id)
                    ->get();
        if( !is_null($secQsets)){
            foreach ($secQsets as $secQset) {
                $sqs = Sectionquestionset::find($secQset->id);
                $sqs->delete();
            }
        }  

        if( is_array($request->sections) && count($request->sections) > 0){
            foreach ($request->sections as $key => $value) {      
                
                $sections                    = new Sectionquestionset;
                $sections->sclass_id         = $request->sclass_id;
                $sections->questionset_id    = $request->questionset_id;
                $sections->section_id        = $value;
                $sections->save();
            }
        }else{
            $secQsets  = Section::orderBy('id','asc')
                        ->where('sclass_id', $request->sclass_id)
                        ->get();
                    
            foreach ($secQsets as $secQset) {
               $sec                    = new Sectionquestionset;
               $sec->sclass_id         = $request->sclass_id;
               $sec->questionset_id    = $request->questionset_id;
               $sec->section_id        = $secQset->id;
               $sec->save();
            }
        }

        session()->flash('success','A new sections question set has added successfully!');
        return redirect()->route('admin.sections');

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
    public function sections(Request $request){
        $classId = $request->id;
        $sections  = Section::orderBy('id','asc')->where('sclass_id',$classId)->get();
        $data = [];
        if(!is_null($sections )){
            foreach ($sections as  $section) {
                $data[] = [ 'id' => $section->id, 'name' => $section->name, 'sclass_id' => $section->sclass_id];
            }
        }
        echo json_encode($data);die();
    }



}
