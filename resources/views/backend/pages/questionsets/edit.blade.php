@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Edit Question Set
			</div>
			<div class="card-body">
				<form action="{{ route('admin.questionsets.update',$questionset->id) }}" enctype="multipart/form-data" method="post">
					{{ csrf_field() }}
					@include('backend.partials.message')
					<div class="form-group">
						<label for="title">Question Set</label>
						<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $questionset->title}}">
					</div>
			

					<button type="submit" class="btn btn-primary">Update Question Set</button>
				</form>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
