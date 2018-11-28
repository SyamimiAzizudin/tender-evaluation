<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UMW Sourcing</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<img src="{{ asset('img/umw-login-logo.png') }}" class="img-responsive center-block login" alt="Responsive image">
		</div>
		<div class="row center-block login">
			<div class="text-center">
				<h1>Sourcing System</h1>
			</div>
		</div>
		<div class="row login">
			<form class="form-horizontal center-block" method="POST" action="{{ route('login') }}">
				@csrf

				<div class="form-group login">
					<label for="email" class="col-sm-3 control-label text-right">{{ __('Email') }}</label>
					<div class="col-sm-8">
						<input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>

						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group login">
					<label for="password" class="col-sm-3 control-label text-right">{{ __('Password') }}</label>
					<div class="col-sm-8">
						<input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group login">
					<div class="col-xs-4 text-center">
						<small><a href="{{ route('password.request') }}">{{ __('Lost Password') }}</a></small>
					</div>
					<button type="submit" class="btn btn-primary col-sm-2 col-sm-offset-4">{{ __('Login') }}</button>
				</div>
			</form>
		</div>
		<div class="row center-block">
			<div class="text-center contact">
				<small>Contact : admin-sourcing@umw.com.my or 03-4525 2215</small>
			</div>
		</div>
	</div>
</body>
</html>