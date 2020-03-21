@extends('frontend.layouts.master')
@section('content')
<div class="cotainer margin-top-20">
    <div class="row">
        <div class="col-md-10 ml-5">
            <div class="widget">
                <h3 class="text-center"> Exam Finished </h3>
                @php
                foreach($questions as $question){
                echo "<h3>$question->title</h3>";
                    $options = App\Models\Questionoption::getQuestionOptions($question->id);

                    $correctAnswer = App\Models\Questionoption:: getCorrectAnswer($question->id );

                    $userAnswered = App\Models\Questionoption:: getUserAnswered($question->id );

                    echo "<ul>";
                    foreach($options as $option){
                    if( $correctAnswer == $option->id){
                        if($option->id == $userAnswered){
                            echo "<li>$option->title  <strong style='background-color: green'>
                                
                            </style>Correct </strong></li>";
                        }else{
                         echo "<li>$option->title  <strong style='background-color: red'> Wrong </strong></li>";
                    }
                        
                    }else{
                        echo "<li>$option->title </li>";
                    }
                    
                }
                 echo "</ul>";
                }

                @endphp
            </div>

            <div class="widget mb-5"><a href="/" class="btn btn-success">Finish</a></div>
        </div>
    </div>
</div>
@endsection