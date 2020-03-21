@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Add Question Set
			</div>
			<div class="card-body">
				<form action="{{ route('admin.questionsets.store') }}" enctype="multipart/form-data" method="post">
					@csrf
					@include('backend.partials.message')
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter division name">
					</div>

					<button type="submit" class="btn btn-primary">Add Division</button>
				</form>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
