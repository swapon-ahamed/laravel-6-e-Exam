@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Add Section Question Set
			</div>
			<div class="card-body">
				<form action="{{ route('admin.sections.store') }}" enctype="multipart/form-data" method="post">
					@csrf
					@include('backend.partials.message')
					<div class="form-group">
						<label for="title">Question Set</label>
						<select class="form-control" name="questionset_id" id="questionset_id">
							<option value="">Please select question set</option>
							@foreach ($questionsets as $questionset)
								<option value="{{ $questionset->id }}">{{ $questionset->title }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="title">Class</label>
						<select class="form-control" name="sclass_id" id="sclass_id">
							<option value="">Please select class</option>
							@foreach ($classes as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<div id="section_container"></div>
					</div>

					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
