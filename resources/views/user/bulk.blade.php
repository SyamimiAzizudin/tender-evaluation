@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"> User Management</h3>
    </div>
</div>

<div id="bulk-edit" class="row">
	<div class="col-md-10 col-md-offset-1 form-horizontal">
		<div class="page-header">
			<h3>Bulk Edit User</h3>
		</div>
    	<div class="col-md-12 table">

        	{{-- {!! Form::model($user, ['method' => 'PATCH','action' =>  ['UsersController@bulkEdit', $user->id], 'files' => true]) !!} --}}

            <table class="table table-striped table-bordered">
                <tr>
                    <th class="text-center">No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
                <?php $i=1 ?>
                @forelse ($users as $user)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
                <?php $i++; ?>
                @empty
                <tr>
                    <td colspan="6">Looks like there is no user available.</td>
                </tr>
                @endforelse
            </table>

            <div class="form-group pull-right">
			    <a href="{{ action('UsersController@index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Cancel</a>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Update User</button>
			</div>

			{{-- {!! Form::close() !!} --}}

    	</div>
    </div>
</div>

@endsection