@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
		<ol class="breadcrumb">
		    <li><a href="{{ url('/home') }}">Sourcing</a></li>
		    <li><a href="{{ url('/user') }}">Users</a></li>
		    <li class="active">Create new user</li>
		</ol>
	</div>
</div>

<div class="row project supplier user">
	<!-- Note -->
	<div class="col-md-12 full">
		<div class="col-md-3 left-side border-shadow note note-box ghost-box">
			<h3 class="header">Note:</h3>
			<p >Create New user and click send to create and send email</p>
		</div>
		<!-- Create new Supplier -->
		<div class="col-md-9 right-side border-shadow mr-full">
			<h3 class="header">Create New User</h3>
			<form class="create">
				<div class="form-group row">
					<input type="text" class="form-control form-create col-md-5" placeholder="Name">
				</div>
				<div class="form-group row">
					<input type="email" class="form-control form-create col-md-5" placeholder="Email">
				</div>
				<div class="form-group row">
					<input type="password" class="form-control form-create col-md-5" name="password" placeholder="Password">
				</div>
				<div class="pull-right">
					<button type="submit" class="btn manage">Create Account</button>
					<button type="submit" class="btn btn-primary">Send Credentials to User</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection