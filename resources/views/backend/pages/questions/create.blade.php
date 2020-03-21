@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Add Question
			</div>
			<div class="card-body">
				<form action="{{ route('admin.question.store') }}" enctype="multipart/form-data" method="post">
					@csrf
					@include('backend.partials.message')
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter question title">
					</div>
					<div class="form-group">
						<label for="title">Question Set</label>
						<select class="form-control" name="questionset_id" id="questionset_id">
							<option value="">Please select question set</option>
							@foreach ($questionsets as $questionset)
								<option value="{{ $questionset->id }}">{{ $questionset->title }}</option>
							@endforeach
						</select>
					</div>

					<button type="submit" class="btn btn-primary">Add Question</button>
				</form>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
