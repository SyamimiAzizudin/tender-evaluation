@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
		<ol class="breadcrumb">
		    <li><a href="{{ url('/home') }}">Sourcing</a></li>
		    <li><a href="{{ url('/supplier') }}">Supplier Management</a></li>
		    <li class="active">Create new supplier</li>
		</ol>
	</div>
</div>

<div class="row project supplier">
	<!-- Note -->
	<div class="col-md-12 full">
		<div class="col-md-3 left-side border-shadow note note-box">
			<div class="page-header">
				<h3 class="title mr-full">Note:</h3>
			</div>
			<p >Create on 10 Nov 2018 by Edwin Masripan</p>
		</div>
		<!-- Create new Supplier -->
		<div class="col-md-9 right-side border-shadow mr-full">
			<h3 class="header">Create New Supplier</h3>
			<form>
				<div class="form-group form-inline">
					<input type="text" class="form-control form-create" name="name" placeholder="Name">
	    			<input type="text" class="form-control form-create" name="nickname" placeholder="Nickname">
				</div>
	    		<button type="submit" class="btn btn-primary btn-save pull-right">Save</button>
			</form>
		</div>
	</div>
</div>
@endsection