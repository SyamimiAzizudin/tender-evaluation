@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
		<ol class="breadcrumb">
			<li><a href="{{ url('/home') }}">Sourcing</a></li>
		    <li class="active">Supplier Management</li>
		</ol>
	</div>
</div>

<div class="row project supplier user">
	<div class="col-md-12 full">
		<div class="col-md-3 left-side border-shadow note"><!-- Note -->
			<h3 class="header">Note:</h3>
			<p>This is a list of suppliers. Click on the suppliers to know more about the supplier.</p>
			<div class="text-center">
				<a href="{{ url('/supplier/create' )}}" class="btn manage">Create New Supplier</a>
			</div>
		</div>
		<div class="col-md-9 right-side border-shadow mr-full"><!-- Supplier List -->
			<div class="col-md-4 box-header">
				<h3 class="header">Supplier List</h3>
			</div>
			<div class="col-md-8 full">
				<div class="dropdown pull-right">
					<form class="form-inline">
						<div class="form-group">
							<input type="text" name="supplier" class="form-control supplier-search" placeholder="Search Supplier">
							<button type="submit" class="btn manage supplier-search">Search</button>
						</div>
					</form>
				</div>
			</div>
			<table align="center" class="table table-stripped table-bordered">
				<tr>
					<th>Company Name</th>
					<th class="text-center">Nickname</th>
					<th class="text-center">Project Participate</th>
				</tr>
				@for($i = 0; $i < 3; $i++)
					<tr>
						<td><a href="{{ url('/html/company') }}">Company A</a></td>
						@for($j = 0; $j < 1; $j++)
							<td class="text-center">A</td>
							<td class="text-center">12</td>
						@endfor
					</tr>
				@endfor
			</table>
		</div>
	</div>
</div>

@endsection