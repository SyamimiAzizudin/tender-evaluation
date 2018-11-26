@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row single project evaluate">
    <div class="col-md-12 full">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li><a href="{{ url('/evaluation') }}">{Name Project}</a></li>
            <li class="active">Evaluation</li>
        </ol>
        <div class="cs-section first full">
            <div class="col-md-3 left-side border-shadow note">
                <div class="eva-note">
                    <h3 class="title mr-full">Note:</h3>
                    <p>Please rate the supplier.</p>
                </div>
            </div>
            <div class="col-md-9 right-side border-shadow">
                <div class="col-sm-12 full">
                    <div class="col-sm-6 title full">
                        <h4 class="lbl">Project Title</h4>
                        <h3 class="page-header"> {Project Title} </h3>
                    </div>
                    <div class="col-sm-6 ref-no full">
                        <h4 class="lbl">Reference Number</h4>
                        <h3 class="page-header"> {Reference No} </h3>
                    </div>
                </div>
                <div class="desc">
                    <h4 class="lbl">Project Description</h4>
                    <p class="details"> {Project Description} </p>
                </div>
            </div>
        </div>
        <div class="cs-section second full next">
            <div class="col-md-8 border-shadow">
                <h3 class="page-header">Evaluation Criteria Reference</h3>
                <table align="center" class="table table-striped table-bordered"> 
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th colspan="4">Benchmarking</th>
                    </tr>
                    <?php $i = 1 ?>
                    <tr>
                        <td>Technical</td>
                        <td>Delivery</td>
                        <td>Delivery</td>
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Technical</td>
                        <td>Specification</td>
                        <td>Specification</td>
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Technical</td>
                        <td>Credit</td>
                        <td>Credit</td>
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Technical</td>
                        <td>Sale</td>
                        <td>Sale</td>
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <?php $i++ ?>
                </table>
            </div>
            <div class="col-md-3 benchmark-note border-shadow mr-full">
                <h3 class="page-header">Benchmarking Note</h3>
                <div class="details">
                    <span class="meta">
                        For 0-2 <br>
                        0 = Not Met, 1 = Met Expectation, 2 = Exceed
                    </span>
                    <span class="meta">
                        For 0-3 <br>
                        0 = Not Met, 1 = barely minimum, 2 = Meet, 3 = Exceed
                    </span>
                    <span class="meta">
                        For 0-3 <br>
                        0 = Not Met, 1 = barely minimum, 2 = Meet, 3 = Exceed
                    </span>
                    <span class="meta">
                        For 0-3 <br>
                        0 = Not Met, 1 = barely minimum, 2 = Meet, 3 = Exceed
                    </span>
                </div>
            </div>
        </div>

        <div class="cs-section border-shadow summary">
            <h3 class="page-header">Evaluation Criteria</h3>
            <table align="center" class="table table-striped table-bordered"> 
                <tr>
                    <th width="6%" class="vr-middle">Supplier</th>
                    <th width="12%" colspan="2">Delivery</th>
                    <th width="12%" colspan="2">Specification</th>
                    <th width="12%" colspan="2">Credit</th>
                    <th width="12%" colspan="2">Sale</th>
                </tr>
                <tr>
                    <td class="vr-middle">Company A</td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                </tr>
                <tr>
                    <td class="vr-middle">Company B</td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                </tr>
                <tr>
                    <td class="vr-middle">Company C</td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                </tr>
                <tr>
                    <td class="vr-middle">Company D</td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                    <td>
                        {{ Form::select('role', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'], null, ['class' => 'form-control']) }}
                    </td>
                    <td>
                        {!! Form::text('remarks', null, array('placeholder' => 'Remarks','class' => 'form-control')) !!}
                    </td>
                </tr>
            </table>
            <div class="btn-evaluate pull-right">
                <a href="#" class="btn manage mr-full">Save as Draft</a>
                <a href="{{ url('/evaluation') }}" class="btn btn-primary mr-full">Save & Lock</a>
            </div>
        </div>

    </div>
</div>

@endsection