@extends('backend.layouts.master')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-header">
				Manage Question Set in Sections
			</div>
			<div class="card-body">
				@include('backend.partials.message')
				<table class="table table-hover table-stripe">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Class</th>
							<th scope="col">Sections</th>
							<th scope="col">Question Sets</th>
						</tr>
					</thead>
					<tbody>
						@php $i = 1; @endphp
						@foreach($sectionquestionsets as $sectionquestionset)
						<tr>
							<th scope="row">{{ $i }}</th>
							<td>
								@php
								$className =  App\Models\Sclass::getClassNameById($sectionquestionset->sclass_id);
								echo $className;
								@endphp
							</td>
							<td>
								@php
								$sectionNames =  App\Models\Section::getSectionNameById($sectionquestionset->sclass_id);
								echo '<ul>';
								foreach($sectionNames as $sectionName){
									echo '<li>'.$sectionName['name'].'</li>';
								}
							echo '</ul>';
								@endphp
							</td>
							<td>
									@php
									$qsets =  App\Models\Sectionquestionset::getQuestionSetId($sectionquestionset->sclass_id);
									echo '<ul>';
									foreach($qsets as $qset){
										echo '<li>'.App\Models\Questionset::getQuestionSetNameById($qset['questionset_id']).'</li>';
									}
								echo '</ul>';
									@endphp
							</td>
							
						</tr>
						@php $i++ @endphp
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection
