@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row project supplier evaluator">
    <div class="col-lg-12 full">
    	<ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li><a href="{{ url('/project/') }}/{{ $project->id }}">{{ $project->title }}</a></li>
            <li class="active">Evaluator</li>
        </ol>

    	<div class="col-md-3 left-side">
            <div class="cs-section sec title border-shadow">
                <h4 class="lbl">Project Title</h4>
                <h3 class="title">{{ $project->title }}</h3>
            </div>
            <div class="cs-section sec note border-shadow">
                <h3 class="title">Note:</h3>
            	<div>
	                Steps to Create a New Project.
	                <br><br>
	                1. Give a project Title
	                <br>
	                2. Give a project Name
	                <br>
	                3. Add Project description (optional)
	                <br>
	                4. Start From, choose empty, or start with
	                   existing project.
	            </div>
            </div>
    	</div>

    	<div class="col-md-9 right-side border-shadow">
            <div class="cs-section">
                <h3 class="header">Manage Evaluator</h3>
            </div>
            <div class="cs-section form-inline search mr">
            	{!! Form::text('name', null, array('placeholder' => 'Search for Evaluator or Nickname ','class' => 'form-control')) !!}
                <button type="submit" class="btn manage">Add to List Evaluator</button>
            	<p class="lbl">or add a new Evaluator</p>
                <a class="btn manage mr">Create New User</a>
            </div>
            <table align="center" class="table table-striped table-bordered"> 
                <tr>
                    <th width="40%">Name</th>
                    <th width="50%">Role</th>
                    <th></th>
                </tr>
                <?php $i = 01 ?>
                <tr>
                    <td class="vr-middle">Edwin Masripan</td>
                    <td>Admin</td>
                    <td class="vr-middle"><img src="{{ asset('img/cancel.png') }}"></td>
                </tr>
                <tr>
                    <td class="vr-middle">Syamimi Azizudin</td>
                    <td>Admin</td>
                    <td class="vr-middle"><img src="{{ asset('img/cancel.png') }}"></td>
                </tr>
                <tr>
                    <td class="vr-middle">Hanif</td>
                    <td>Evaluator</td>
                    <td class="vr-middle"><img src="{{ asset('img/cancel.png') }}"></td>
                </tr>
                <?php $i++ ?>
                <tr>
                    <td colspan="6">Looks like there is no evaluator available.</td>
                </tr>
            </table>
	        <div class="cs-section sv-submit">
                <a href="{{ url('/project/') }}/{{ $project->id }}" class="btn btn-default pull-left"> Cancel</a>
                <button type="submit" class="btn btn-primary save pull-right">Save</button>
            </div>
    	</div>

        <div class="cs-section nx-btn full">
            <a href="{{ url('/project/') }}/{{ $project->id }}" class="btn btn-primary pull-right">Back to Project</a>
        </div>
    </div>
</div>

@endsection