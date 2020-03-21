@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Edit Question
			</div>
			<div class="card-body">
				<form action="{{ route('admin.question.update',$question->id) }}" enctype="multipart/form-data" method="post">
					{{ csrf_field() }}
					@include('backend.partials.message')
					<div class="form-group">
						<label for="title">Question Title</label>
						<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $question->title}}">
					</div>
					<div class="form-group">
						<label for="title">Question Set</label>
						<select class="form-control" name="questionset_id" id="questionset_id">
							<option value="">Please select question set</option>
							@foreach ($questionsets as $questionset)
								<option value="{{ $questionset->id }}"
								{{ $question->questionset->id == $questionset->id ? 'selected':'' }}

									>{{ $questionset->title }}</option>
							@endforeach
						</select>
					</div>

				

					<button type="submit" class="btn btn-primary">Update Question</button>
				</form>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
