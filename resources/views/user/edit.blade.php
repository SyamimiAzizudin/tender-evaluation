@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12 form-horizontal">
		<div class="page-header">
			<h3>Edit User</h3>
		</div>
    	<div class="col-md-10 col-md-offset-1">
        {!! Form::model($user, ['method' => 'PATCH','action' =>  ['UsersController@update', $user->id], 'files' => true]) !!}

            <div class="form-group {{ $errors->has('supplier_id') ? ' has-error' : '' }} ">
            <label for="company_name" class="col-sm-2 control-label">Company</label>
                <div class="col-sm-10">

                    <select name="supplier_id" class="form-control">
                        <option value="">Select Company </option>
                        @foreach($suppliers as $id => $company_name)
							@if($user->supplier_id != null && $user->supplier_id == $id)
								<option value="{{ $id }}" selected>{{ $company_name }}</option>
							@else
                            	<option value="{{ $id }}">{{ $company_name }}</option>
							@endif
                        @endforeach
                    </select>
                    @if($errors->has('supplier_id'))
                        <span class="help-block">{{ $errors->first('supplier_id') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Role</label>
                <div class="col-sm-10">
                    {{ Form::select('role', ['Super Admin' => 'Super Admin', 'Project Owner' => 'Project Owner', 'Evaluator Commercial' => 'Evaluator Commercial', 'Evaluator Technical' => 'Evaluator Technical'], null, ['class' => 'form-control'], ['placeholder' => 'Select Role']) }}
                </div>
            </div>
        	<div class="form-group">
        		<label for="name" class="col-sm-2 control-label">Name</label>
        		<div class="col-sm-10">
        			{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        		</div>
    		</div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
    		<div class="form-group">
    			<div class = "pull-right">
    				<a href="{{ action('UsersController@index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Cancel</a>
    				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Save</button>
    			</div>
    		</div>
		{!! Form::close() !!}
    	</div>
    </div>
</div>

@endsection