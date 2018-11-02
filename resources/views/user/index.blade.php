@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">User Management </h3>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li class="active">User Management</li>
        </ol>
        
            <div class="col-md-10 col-md-offset-1">

                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company Name</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                    <?php $i=1 ?>
                    @forelse ($users as $user)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->supplier_id != null)
                                {{ $user->suppliers->company_name }}
                            @endif
                        </td>
                        <td>{{ $user->role }}</td>
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

<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2 form-horizontal">
        <div class="page-header">
            <h3>Create New User</h3>
        </div>
    
        <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
            <label for="supplier_id" class="col-md-4 control-label">Supplier</label>
                <div class="col-md-6">
                    <select name="supplier_id" class="form-control">
                        <option value="">Select Supplier</option>
                        @foreach($suppliers as $id => $company_name)
                            <option value="{{ $id }}">{{ $company_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
            <label for="role" class="col-md-4 control-label">Role</label>
                <div class="col-md-6">
                    {{ Form::select('role', ['superadmin' => 'Super Admin', 'project_owner' => 'Project Owner', 'evaluator_commercial' => 'Evaluator Commercial', 'evaluator_technical' => 'Evaluator Technical'], null, ['class' => 'form-control'], ['placeholder' => 'Select Role']) }}
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