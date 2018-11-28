@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row add project">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li><a href="{{ url('/project/') }}/{{ $project->id }}">{{ $project->title }}</a></li>
            <li><a href="#">Edit Project</a></li>
        </ol>

        <div class="col-md-3 note left-side border-shadow">
            <h3 class="title mr-full">Note:</h3>
            <div>
                Steps to Edit Project.
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
        </div>
        <div class="col-md-9 form-horizontal right-side border-shadow mr-full">
            <h3 class="header">Edit Project</h3>
            {!! Form::model($project, ['method' => 'PATCH','action' =>  ['ProjectsController@update', $project->id], 'files' => true]) !!}

                <div class="cs-section">
                    <div class="col-md-5 form-group">
                        <label for="title" class="control-label">Project Title</label>
                        <div class="cs-section">
                            {!! Form::text('title', null, array('placeholder'=>'e.g. IT Hardware Sourcing', 'class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="reference_no" class="control-label">Reference Number</label>
                        <div class="cs-section">
                            {!! Form::text('reference_no', null, array('placeholder'=>'e.g. RFQ 18/2910', 'class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="closing_date" class="control-label">Closing Date</label>
                        <div class="cs-section">
                            {{-- {!! Form::date('closing_date', null, array('placeholder'=>'18/2910', 'class'=>'form-control')) !!} --}}
                            <input class="form-control" type="date" name="closing_date" value="{{ $project->closing_date }}" />
                        </div>
                    </div>
                </div>

                <div class="cs-section mr-b">
                    <label for="description" class="control-label">Project Description</label>
                    {!! Form::textarea('description', null, array('placeholder'=>'Optional', 'class'=>'form-control', 'rows'=>3)) !!}
                </div>

                <label for="start-project" class=" control-label full">Start From Template or Existing Project</label>
                <div class="cs-section form-row align-items-center custom-field">
                    <div class="col-sm-3 my-1">
                        <div class="form-check full">
                            <input class="form-check-input" type="radio" name="title2" id="empty_project" value="empty_project" checked>
                            <label class="form-check-label lbl-title" for="">Empty Project</label>
                        </div>
                    </div>
                    <div class="col-sm-4 my-1">
                        <div class="form-check full">
                            <input class="form-check-input" type="radio" name="title2" id="template_project" value="template_project">
                            <label class="form-check-label lbl-title" for="">Copy from Existing Project</label>
                        </div>
                    </div>
                    <div class="col-sm-5 my-1">
                        <div class="form-check full">
                            <select name="id" class="form-control">
                                {{-- <option value="">Select Existing Project</option> --}}
                                @foreach($projects as $id => $title)
                                    <option value="{{ $id }}">{{ $title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="cs-section full btn">
                    <a href="{{ action('ProjectsController@dash') }}" class="btn btn-default pull-left"> Cancel</a>
                    <button type="submit" class="btn btn-primary save pull-right"> Save</button>
                </div>

            {!! Form::close() !!}
        </div>

    </div>
</div>

@endsection