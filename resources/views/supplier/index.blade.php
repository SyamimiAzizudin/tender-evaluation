@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"> Supplier Management</h3>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home</a>
            </li>
            <li class="active">Supplier Management</li>
        </ol>
        <div class="col-md-10 col-md-offset-1 text-center">
            <table align="center" class="table table-striped table-bordered"> 
                <tr>
                    <th class="text-center">No</th>
                    <th>Supplier Name</th>
                    <th>Short Name</th>
                    <th>Bid Value (RM)</th>
                    <th>Document</th>
                    <th></th>
                </tr>
                <?php $i = 1 ?>
                @forelse($suppliers as $supplier)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td>{{ $supplier->company_name }}</td>
                    <td>{{ $supplier->short_name }}</td>
                    <td class="mv-right">{{ number_format($supplier->bid_value, 2, '.', ',') }}</td>
                    <td><a href="{{ $supplier->document }}" target="_blank">Document_{{ $supplier->short_name }}</a></td>
                    <td>
                        @if( $supplier->id)
                            <a href="{{ action('SuppliersController@edit', $supplier->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <a href="{{ action('SuppliersController@destroy', $supplier->id) }}" class="btn btn-danger btn-xs" id="confirm-modal">Delete</a>
                        @endif
                    </td>
                </tr>
                <?php $i++ ?>
                @empty
                <tr>
                    <td colspan="6">Looks like there is no supplier available.</td>
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
            <h3>Add Supplier</h3>
        </div>
        {!! Form::open(array('route' => 'supplier.store','method'=>'POST', 'files' => true)) !!}
            <div class="form-group">
                <label for="company_name" class="col-sm-3 control-label">Supplier Name</label>
                <div class="col-sm-9">
                    {!! Form::text('company_name', null, array('placeholder'=>'Supplier name', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="short_name" class="col-sm-3 control-label">Short Name</label>
                <div class="col-sm-9">
                    {!! Form::text('short_name', null, array('placeholder'=>'Short name', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="bid_value" class="col-sm-3 control-label">Bid Value</label>
                <div class="col-sm-9">
                    {!! Form::number('bid_value', null, array('step'=>'any', 'placeholder'=>'Bid Value', 'class' =>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="document" class="col-sm-3 control-label">Select Document</label>
                <div class="col-sm-9">
                    {!! Form::file('document', null, array('placeholder'=>'Document', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <div class = "col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Create Supplier</button>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>
        
@endsection