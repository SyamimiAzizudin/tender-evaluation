@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Evaluation </h3>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/project-supplier') }}">Project - Supplier List</a></li>
            <li class="active">Evaluation</li>
        </ol>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-8 col-md-offset-2 form-horizontal">
        <div class="page-header">
            <h3>Start Evaluation</h3>
        </div>
    </div>
</div>
        
@endsection