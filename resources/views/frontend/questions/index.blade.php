@extends('frontend.layouts.master')
@section('content')
<div class="cotainer margin-top-20">
    <div class="row">
        <div class="col-md-10 ml-5">
            <div class="widget text-center">
              <form action="{{ route('exam.create') }}" method="post">
                @csrf
                <input type="hidden" name="question_create" value="1">
                <input type="submit" name="submit" class="btn btn-success" value="Start Exam >>">
              </form>
            </div>

            <div class="widget"></div>
        </div>
    </div>
</div>
@endsection