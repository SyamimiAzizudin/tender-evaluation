@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row project criteria">
    <div class="col-lg-12 full">
    	<ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li><a href="{{ url('/project/') }}/{{ $project->id }}">{{ $project->title }}</a></li>
            <li class="active">Criteria</li>
        </ol>

        <div class="col-md-12 full">
        	<div class="col-md-3 left-side">
                <div class="col-md-12 sec title border-shadow">
                    <h4 class="lbl">Project Title</h4>
                    <h3 class="title">{{ $project->title }}</h3>
                </div>
                <div class="col-md-12 sec note border-shadow">
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
                <div class="col-md-12 sec link border-shadow">
	                <h3 class="title">Import</h3>
                    <div class="link">
                        <a href="#">Import for Excel</a>
                        <a href="#">Import for CSV</a>
                    </div>
                </div>
        	</div>

        	<div class="col-md-9 right-side border-shadow">
                <div class="col-sm-12 full">
                	<div class="page-header">
		                <h3>Create New Criteria</h3>
		            </div>
                </div>
                <div class="col-lg-12 full">
		            <table align="center" class="table table-striped table-bordered"> 
		                <tr>
		                    <th>Type</th>
		                    <th>Name</th>
		                    <th>Description</th>
		                    <th>Benchmark</th>
		                    <th width="7%">Weightage</th>
		                    <th></th>
		                </tr>
		                <?php $i = 01 ?>
		                <tr>
		                    <td>
                            	{{ Form::select('type', ['Commercial' => 'Commercial', 'Technical' => 'Technical'], null, ['class' => 'form-control'], ['placeholder' => 'Select Role']) }}

		                    </td>
		                    <td>
                            	{!! Form::text('name', null, array('placeholder' => 'eg: Name','class' => 'form-control')) !!}
		                    </td>
		                    <td>
                            	{!! Form::text('description', null, array('placeholder' => 'eg: Delivery','class' => 'form-control')) !!}
		                    </td>
		                    <td>
		                    	{{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
		                    </td>
		                    <td>
                            	{!! Form::number('name', null, array('placeholder' => '30','class' => 'form-control')) !!}
		                    </td>
		                    <td class="vr-middle"><img src="{{ asset('img/cancel.png') }}"></td>
		                </tr>
		                <tr>
		                    <td>
                            	{{ Form::select('type', ['Commercial' => 'Commercial', 'Technical' => 'Technical'], null, ['class' => 'form-control'], ['placeholder' => 'Select Role']) }}

		                    </td>
		                    <td>
                            	{!! Form::text('name', null, array('placeholder' => 'eg: Name','class' => 'form-control')) !!}
		                    </td>
		                    <td>
                            	{!! Form::text('description', null, array('placeholder' => 'eg: Delivery','class' => 'form-control')) !!}
		                    </td>
		                    <td>
		                    	{{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
		                    </td>
		                    <td>
                            	{!! Form::number('name', null, array('placeholder' => '30','class' => 'form-control')) !!}
		                    </td>
		                    <td class="vr-middle"><img src="{{ asset('img/cancel.png') }}"></td>
		                </tr>
		                <tr>
		                    <td>
                            	{{ Form::select('type', ['Commercial' => 'Commercial', 'Technical' => 'Technical'], null, ['class' => 'form-control'], ['placeholder' => 'Select Role']) }}

		                    </td>
		                    <td>
                            	{!! Form::text('name', null, array('placeholder' => 'eg: Name','class' => 'form-control')) !!}
		                    </td>
		                    <td>
                            	{!! Form::text('description', null, array('placeholder' => 'eg: Delivery','class' => 'form-control')) !!}
		                    </td>
		                    <td>
		                    	{{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
		                    </td>
		                    <td>
                            	{!! Form::number('name', null, array('placeholder' => '30','class' => 'form-control')) !!}
		                    </td>
		                    <td class="vr-middle"><img src="{{ asset('img/cancel.png') }}"></td>
		                </tr>
		                <?php $i++ ?>
		                <tr>
		                    <td colspan="6">Looks like there is no criteria available.</td>
		                </tr>
		            </table>
                    <a href="#" class="btn manage row pull-right"> Add Row</a>
		        </div>
		        <div class="col-md-12 full btn">
                    <a href="{{ url('/project/') }}/{{ $project->id }}" class="btn btn-default pull-left"> Cancel</a>
                    <button type="submit" class="btn btn-primary save pull-right">Save</button>
                </div>
        	</div>
        </div>

        <div class="col-md-12 full">
            <a href="{{ url('/project/supplier') }}/{{ $project->id }}" class="btn btn-primary pull-right">Next: Supplier</a>
        </div>
    </div>
</div>

@endsection