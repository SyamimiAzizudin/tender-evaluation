@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">List of Users </h3>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li class="active">Users</li>
        </ol>

        <div class="col-lg-12">
            <div class="col-md-2">
                <div class="user-count">
                    <span class="count">{{ $admin_count }}</span>
                    Admin
                </div>
                <div class="user-count">
                    <span class="count">{{ $po_count }}</span>
                    Project Owners
                </div>
                <div class="user-count">
                    <span class="count">{{ $eva_count }}</span>
                    Evaluators
                </div>
                <div class="user-count">
                    <span class="count">{{ $user_count }}</span>
                    Users
                </div>

                <div class="btn-bulkedit">
                    <a href="{{ action('UsersController@bulkEdit') }}" class="">Bulk Edit</a>
                </div>
            </div>
        
            <div class="col-md-10">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name</th>
                        <th>Roles</th>
                        <th>Created By</th>
                        <th>Last Active</th>
                        <th>Invite</th>
                        <th></th>
                    </tr>
                    <?php $i=1; ?>
                    @forelse ($users as $user)
                    <?php $date = $user->last_login; ?>
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_by }}</td>
                        <td>{{ $date ? $date->diffForHumans(): 'Not active yet' }}</td>
                        <td class="center"><a href="#"><img src="{{ asset('img/mail.png') }}"></a></td>
                        <td>
                            @if($user->id)
                            <a href="{{ action('UsersController@edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <a href="{{ action('UsersController@destroy', $user->id) }}" class="btn btn-danger btn-xs" id="confirm-modal">Delete</a>
                            @endif
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @empty
                    <tr>
                        <td colspan="6">Looks like there is no user available.</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>

    </div>
</div>

<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2 form-horizontal">
        <div class="page-header">
            <h3>Create User</h3>
        </div>
    
        <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
            <label for="role" class="col-md-4 control-label">Role</label>
                <div class="col-md-6">
                    {{ Form::select('role', ['Super Admin' => 'Super Admin', 'Project Owner' => 'Project Owner', 'Evaluator Commercial' => 'Evaluator Commercial', 'Evaluator Technical' => 'Evaluator Technical'], null, ['class' => 'form-control'], ['placeholder' => 'Select Role']) }}
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register User
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection