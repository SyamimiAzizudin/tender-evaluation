@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
		<ol class="breadcrumb">
			<li><a href="{{ url('/home') }}">Sourcing</a></li>
			<li><a href="{{ url('/supplier') }}">Supplier Management</a></li>
		    <li class="active">Company A</li>
		</ol>
	</div>
</div>

<div class="row project supplier user">
	<!-- Note -->
	<div class="col-md-12 full">
		<div class="col-md-3 left-side border-shadow note note-box">
			<h3 class="header">Note:</h3>
			<p >Create on 10 Nov 2018 by Edwin Masripan</p>
		</div>
		<!-- Supplier List -->
		<div class="col-md-9 right-side border-shadow mr-full">
			<div class="col-md-4 box-header">
				<h3 class="header">Company A</h3>
			</div>
			<table align="center" class="table table-stripped table-bordered">
				<tr>
					<th>Project Participated</th>
					<th>Evaluators</th>
					<th class="text-center">Price (RM)</th>
					<th class="text-center">Result</th>
				</tr>
				@for($i = 0; $i < 3; $i++)
					<tr>
						<td><a href="#">Project A</a></td>
						@for($j = 0; $j < 1; $j++)
							<td>Hello</td>
							<td class="text-center">12,000</td>
							<td class="text-center">win</td>
						@endfor
					</tr>
				@endfor
			</table>
		</div>
	</div>
</div>

@endsection