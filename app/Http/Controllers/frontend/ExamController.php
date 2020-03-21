<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Questionoption;
use App\Models\Answer;
use App\Models\Temp;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('frontend.questions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function startExam()
    {   
        $temp = Temp::where('attempt', null)->where('ip_address', request()->ip())->get();
        $questions = [];
        if(count($temp) <= 0){

            $skips = Temp::where('attempt', 0)->where('ip_address', request()->ip())->get();
            if( count($skips) > 0){
                foreach ($skips as $skip) {
                   $temp               = Temp::find($skip->id);
                   $temp->attempt         = NULL;
                   $temp->save();
                }
                return redirect()->route('exam.start');
            }

            return redirect()->route('exam.finish');
        }

        $viewQuestion = Temp::where('attempt', null)->where('ip_address', request()->ip())->first();
        // var_dump($viewQuestion->question_id);die();
        $question_id = $viewQuestion->question_id;
        $temp_id = $viewQuestion->id;
        $question = Question::find($question_id);

        return view('frontend.questions.startexam', compact('question','temp_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id ){
        $this->validate($request, 
            [
                'question_id' => 'required',
                'questionoption_id' => 'required'
            ],
            [
                'question_id.required' => 'Please provide question',
                'questionoption_id.required' => 'Please provide question options'
            ]

        );
        
        $tmp                  = Temp::where('question_id', $id)->get();
        $temp               = Temp::find($tmp[0]->id);
        $temp->attempt         = 1;
        $temp->save();

        $answer                = new Answer();
        $answer->question_id   = $request->question_id;
        $answer->questionoption_id   = $request->questionoption_id;
        $answer->ip_address   = request()->ip();
        // $answer->attempt     = $attempt;
        $answer->save();
        return redirect()->route('exam.start');

    }

    public function finish()
    {   
        $temp      = Temp::where('ip_address', request()->ip())->where('attempt', 1)->get();
        if(!is_null($temp)){
             foreach ($temp as $tmp) {
                 $temps = Temp::where('id', $tmp->id)->get();
                 $tmp->delete();
             }
        }
        $questions = [];
        $questions = Question::all();
        $userAnswers = Answer::orderBy('id','desc')->where('ip_address', request()->ip())->limit(count($questions))->get();
        $correctAnswers = Questionoption::where('correct', 1)->get();
        return view('frontend.questions.finish', compact('questions','userAnswers', 'correctAnswers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $temp = Temp::where('attempt', null)->where('ip_address', request()->ip())->get();

       if(count($temp) <= 0){

           $results = Question::all();
           foreach ($results as $result) {
               $questions[] = $result->id;
           }
           shuffle($questions);
           foreach($questions as $val){
               $temp                     = new Temp;
               $temp->question_id        = $val;
               $temp->ip_address         = request()->ip();
               $temp->save();
           }
           return redirect()->route('exam.start');
       }else{
        return redirect()->route('exam.start');
       }
    }

    public function updateTemp(Request $request)
    {
        $temp_id = $request->temp_id;
        $temp               = Temp::find($temp_id);
        $temp->attempt         = 0;
        $temp->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
