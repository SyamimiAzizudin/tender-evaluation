@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row add project">

    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li><a href="#">New Project</a></li>
        </ol>
    </div>

    <div class="col-md-12">
        <div class="col-md-3 note left-side border-shadow">
            <h3 class="title mr-full">Note:</h3>
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
        <div class="col-md-9 form-horizontal right-side border-shadow mr-full">
            <div class="page-header">
                <h3>Create New Project</h3>
            </div>
            {!! Form::open(array('route' => 'project.store','method'=>'POST', 'files' => true)) !!}

                <div class="col-md-12 full">
                    <div class="col-md-5 form-group">
                        <label for="title" class="col-sm-12 control-label">Project Title</label>
                        <div class="col-sm-12">
                            {!! Form::text('title', null, array('placeholder'=>'e.g. IT Hardware Sourcing', 'class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="reference_no" class="col-sm-12 control-label">Reference Number</label>
                        <div class="col-sm-12">
                            {!! Form::text('reference_no', null, array('placeholder'=>'e.g. RFQ 18/2910', 'class'=>'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="closing_date" class="col-sm-12 control-label">Closing Date</label>
                        <div class="col-sm-12">
                            {!! Form::date('closing_date', null, array('class'=>'form-control')) !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description" class="control-label">Project Description</label>
                        {!! Form::textarea('description', null, array('placeholder'=>'Optional', 'class'=>'form-control', 'rows'=>3)) !!}
                    </div>
                </div>

                {{-- <div class="col-md-12">
                    <div class="col-md-6 form-group">
                        <label for="description" class="col-sm-12 control-label">Project Description</label>
                        <div class="col-sm-12">
                            {!! Form::textarea('description', null, array('placeholder'=>'Optional', 'class'=>'form-control', 'rows'=>3)) !!}
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="document" class="col-sm-12 control-label">Select Document</label>
                        <div class="col-sm-12">
                            {!! Form::file('document', null, array('placeholder'=>'Document', 'class'=>'form-control')) !!}
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-12">
                    <div class="col-md-6 form-group">
                        <label for="status" class="col-sm-12 control-label">Project Status</label>
                        <div class="col-sm-12">
                            {{ Form::select('status', ['Evaluated' => 'Evaluated', 'Not Evaluated' => 'Not Evaluated', 'Cancelled' => 'Cancelled'], null, ['class' => 'form-control'], ['placeholder' => 'Select Status']) }}
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="price" class="col-sm-12 control-label">Budget Value (RM)</label>
                        <div class="col-sm-12">
                            {!! Form::number('price', null, array('placeholder'=>'e.g. 100000', 'class'=>'form-control')) !!}
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-12 full">
                    <label for="start-project" class="col-sm-12 control-label full">Start From Template or Existing Project</label>
                    <div class="col-sm-12 form-row align-items-center custom-field">
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
                </div>

                <div class="col-md-12 full btn">
                    <a href="{{ action('ProjectsController@dash') }}" class="btn btn-default pull-left"> Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right"> Create Project</button>
                </div>

            {!! Form::close() !!}
        </div> 
    </div>

</div>

@endsection