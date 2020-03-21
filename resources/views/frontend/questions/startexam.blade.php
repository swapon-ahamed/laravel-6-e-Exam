@extends('frontend.layouts.master')
@section('content')
<div class="cotainer margin-top-20">
    <div class="row">
        <div class="col-md-6 ml-5">
            <div class="widget">
            	<form action="{{ route('exam.store', $question->id) }}" name="exam" id="exam" method="post">
                <h1> Exam</h1>
                <h3>{{ $question->title }}</h3>
                @csrf
                <ul class="list-group">
                @php	
                	$options = App\Models\Questionoption::getQuestionOptions($question->id);
                	foreach($options as $option){
                	echo '<li class="list-group-item"><input type="radio" name="questionoption_id" value="'.$option->id.'"> '. $option->title.'</li>';
                }

                @endphp	
                </ul>
                <input type="hidden" name="question_id" value="{{ $question->id }}">
                <input type="hidden" name="temp_id" id="temp_id" value="{{ $temp_id }}">
                
                <input type="submit" class="btn btn-success float-right ml-5 mt-5" name="submit">
                </form>
                <div class="float-right"><button name="later" class="btn btn-primary mt-5" id="later">Later</button></div>
            </div>

            <div class="widget"></div>
        </div>
    </div>
</div>
@endsection