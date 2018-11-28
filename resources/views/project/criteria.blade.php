@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row project criteria">
    <div class="col-md-12 full">
    	<ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li><a href="{{ url('/project/') }}/{{ $project->id }}">{{ $project->title }}</a></li>
            <li class="active">Criteria</li>
        </ol>

    	<div class="col-md-3 left-side">
            <div class="cs-section sec title border-shadow">
                <h4 class="lbl">Project Title</h4>
                <h3 class="title">{{ $project->title }}</h3>
            </div><!-- .cs-section -->
            <div class="cs-section sec note border-shadow">
                <h3 class="title">Note:</h3>
            	<div>
	                Steps to Create a New Project.
	                <br><br>
	                1. Give a project Title
	                <br>
	                2. Give a project Reference Number
	                <br>
	                3. Give a project Closing Date
	                <br>
	                4. Add Project description (optional)
	                <br>
	                5. Start From, choose empty, or start with
	                   existing project.
	            </div>
            </div><!-- .cs-section -->
            <div class="cs-section sec link border-shadow">
                <h3 class="title">Import</h3>
                <div class="link">
                    <a href="#">Import for Excel</a>
                    <a href="#">Import for CSV</a>
                </div>
            </div><!-- .cs-section -->
    	</div><!-- .col-md-3 -->

    	<div class="col-md-9 right-side border-shadow">
            <div class="cs-section">
    			<h3 class="header">Create New Criteria</h3>
            </div><!-- .cs-section -->
            <div class="cs-section">
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
	        </div><!-- .cs-section -->
	        <div class="cs-section sv-submit">
                <a href="{{ url('/project/') }}/{{ $project->id }}" class="btn btn-default pull-left"> Cancel</a>
                <button type="submit" class="btn btn-primary save pull-right">Save</button>
            </div>
    	</div><!-- .col-md-9 -->

        <div class="cs-section nx-btn full">
            <a href="{{ url('/project/supplier') }}/{{ $project->id }}" class="btn btn-primary pull-right">Next: Supplier</a>
        </div><!-- .cs-section -->
    </div><!-- .col-md-12 -->
</div><!-- .row -->

@endsection