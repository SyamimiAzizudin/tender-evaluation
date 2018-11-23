@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Project Management</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 form-horizontal">
        <div class="page-header">
            <h3>Edit Project</h3>
        </div>

        <div class="col-md-12">
        {!! Form::model($project, ['method' => 'PATCH','action' =>  ['ProjectsController@update', $project->id], 'files' => true]) !!}
            
            <div class="form-group">
                <div class="col-sm-9">
                    <input type="hidden" name="supplier_id" value="{{$project->supplier_id}}" class="form-control" >
                </div>
            </div>

            <div class="form-group">
                <label for="reference_no" class="col-sm-3 control-label">Reference No.</label>
                <div class="col-sm-9">
                    {!! Form::text('reference_no', null, array('placeholder'=>'Reference No.', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Project Title</label>
                <div class="col-sm-9">
                    {!! Form::text('title', null, array('placeholder'=>'Project Title', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="document" class="col-sm-3 control-label">Select Document</label>
                <div class="col-sm-9 document">
                    {!! Form::file('document', null, array('placeholder'=>'Document', 'class'=>'form-control')) !!}
                    <a href="{{ $project->document }}" target="_blank">Document_{{ $project->reference_no }}</a>
                </div>
            </div>

            <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Select Status</label>
                <div class="col-sm-9">
                    {{ Form::select('status', ['Pending' => 'Pending', 'On-Going' => 'On-Going', 'Closed' => 'Closed'], null, ['class' => 'form-control'], ['placeholder' => 'Select Status']) }}
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Price (RM)</label>
                <div class="col-sm-9">
                    {!! Form::number('price', null, array('placeholder'=>'Price (RM)', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <div class = "col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Save</button>
                </div>
            </div>
        {!! Form::close() !!}
        </div>

    </div>
</div>

@endsection