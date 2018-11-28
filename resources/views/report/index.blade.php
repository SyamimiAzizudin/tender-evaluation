@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
		<ol class="breadcrumb">
			<li><a href="{{ url('/home') }}">Sourcing</a></li>
		    <li class="active">Report</li>
		</ol>
	</div>
</div>

<div class="row project supplier report user">
	<div class="col-md-12 full">
		<!-- Note -->
		<div class="col-md-3 left-side border-shadow note note-box">
			<h3 class="header">Note:</h3>
			<p>This view is the list of Report based on the project. Click on the project to see CSV or XLS.</p>
		</div>
		<!-- Supplier List -->
		<div class="col-md-9 right-side border-shadow mr-full">
			<div class="col-md-4 box-header">
				<h3 class="header">Report</h3>
			</div>
			<div class="col-md-8 full">
				<div class="dropdown pull-right">
					<form class="form-inline">
						<div class="form-group">
							<input type="text" name="supplier" class="form-control supplier-search" placeholder="Search Report">
							<button type="submit" class="btn manage supplier-search">Search</button>
						</div>
					</form>
				</div>
			</div>
			<table align="center" class="table table-stripped table-bordered">
				<tr>
					<th>Project Title</th>
					<th>Reference No.</th>
					<th>Evaluators</th>
					<th>Status</th>
					<th>Evaluation</th>
				</tr>
				@for($i = 0; $i < 3; $i++)
					<tr>
						<td><a href="{{ url('/report/project/') }}">Project A</a></td>
						<td><a href="#">RFQ 18/102</a></td>
						@for($j = 0; $j < 3; $j++)
							<td>Hello</td>
						@endfor
					</tr>
				@endfor
			</table>
		</div>
	</div>
</div>

@endsection