@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Project - {{ $supplier->company_name }} </h3>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/project-supplier') }}">Project - Supplier List</a></li>
            <li class="active">Project - {{ $supplier->company_name }}</li>
        </ol>
        <div class="col-md-10 col-md-offset-1 text-center">
            <table align="center" class="table table-striped table-bordered"> 
                <tr>
                    <th class="text-center">No</th>
                    <th>Reference No</th>
                    <th>Project Title</th>
                    <th>Document</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                <?php $i = 1 ?>
                @forelse($projects as $project)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td>{{ $project->reference_no }}</td>
                    <td>{{ $project->title }}</td>
                    <td><a href="{{ $project->document }}" target="_blank">Document_{{ $project->reference_no }}</a></td>
                    <td>{{ $project->status }}</td>
                    <td>
                        @if( $project->id)
                            <a href="{{ url('/evaluation') }}" class="btn btn-primary btn-xs">Details</a>
                            <a href="{{ action('ProjectsController@edit', $project->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <a href="{{ action('ProjectsController@destroy', $project->id) }}" class="btn btn-danger btn-xs" id="confirm-modal">Delete</a>
                        @endif
                    </td>
                </tr>
                <?php $i++ ?>
                @empty
                <tr>
                    <td colspan="6">Looks like there is no project available.</td>
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
            <h3>Add Project</h3>
        </div>
        {!! Form::open(array('route' => 'project.store','method'=>'POST', 'files' => true)) !!}

            <div class="form-group">
                <label for="supplier" class="col-sm-3 control-label">Supplier</label>
                <div class="col-sm-9">
                    {{$supplier->company_name}}
                    <input type="hidden" name="supplier_id" value="{{$supplier->id}}" class="form-control" >
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
                <div class="col-sm-9">
                    {!! Form::file('document', null, array('placeholder'=>'Document', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Select Status</label>
                <div class="col-sm-9">
                    {{ Form::select('status', ['Pending' => 'Pending', 'On-Going' => 'On-Going', 'Closed' => 'Closed'], null, ['class' => 'form-control'], ['placeholder' => 'Select Status']) }}
                </div>
            </div>

            <div class="form-group">
                <div class = "col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Create Project</button>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>
        
@endsection