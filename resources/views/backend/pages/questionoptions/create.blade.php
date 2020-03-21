@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Add Question Options
			</div>
			<div class="card-body">
				<form action="{{ route('admin.questionoption.store') }}" enctype="multipart/form-data" method="post">
					@csrf
					@include('backend.partials.message')
					<div class="form-group">
						<label for="title">Select Question</label>
						<select name="question_id" id="question_id" class="form-control">
							<option value="">Please select question</option>
							@php
							foreach($questions as $question){
								echo '<option value="'.$question->id.'">'.$question->title.'</option>';
							}
							@endphp
						</select>
					</div>
					<div class="form-group">
						<label for="title">Question Options</label>
						<div class="row mb-5">
						    <div class="col">
						      <input type="text" name="option[]" class="form-control" placeholder="Option One">
						    </div>
						    <div class="col">
						      <input type="radio" name="correct" value="0" class="">
						    </div>
						  </div>

						  <div class="row mb-5">
						      <div class="col">
						        <input type="text" name="option[]" class="form-control" placeholder="Option Two">
						      </div>
						      <div class="col">
						        <input type="radio" name="correct" value="1" class="">
						      </div>
						    </div>

						    <div class="row mb-5">
						        <div class="col">
						          <input type="text" name="option[]" class="form-control" placeholder="Option Three">
						        </div>
						        <div class="col">
						          <input type="radio" name="correct" value="2" class="">
						        </div>
						      </div>

						      <div class="row mb-5">
						          <div class="col">
						            <input type="text" name="option[]" class="form-control" placeholder="Option Four">
						          </div>
						          <div class="col">
						            <input type="radio" name="correct" value="3" class="">
						          </div>
						        </div>

					<button type="submit" class="btn btn-primary">Add Question</button>
				</form>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
