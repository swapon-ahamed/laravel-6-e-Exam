<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionoption extends Model
{
    public static function getQuestionOptions($id){
    	return $optios = Questionoption::orderBy('id','asc')->where('question_id', $id)
    	->get();
    }

    public static function getCorrectAnswer($question_id ){
    	$ans = Questionoption::find(1)->where('question_id', $question_id)->where('correct', 1)->get();
    	return $ans[0]->id;
    }

    public static function getUserAnswered($question_id ){
    	$useerAnswered = Answer::orderBy('id', 'desc')->where('question_id', $question_id)->where('ip_address', request()->ip() )->get();

    	        // $userAnswers = Answer::orderBy('id','desc')->where('ip_address', request()->ip())->limit(count($questions))->get();
    	// var_dump($useerAnswered);die();
    	return $useerAnswered[0]->questionoption_id;
    }
}
