@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"> Supplier Management</h3>
    </div>
</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2 form-horizontal">
		<div class="page-header">
			<h3>Edit Supplier</h3>
		</div>
    	<div class="col-md-8 col-md-offset-2">
        {!! Form::model($supplier, ['method' => 'PATCH','action' =>  ['SuppliersController@update', $supplier->id], 'files' => true]) !!}
        	<div class="form-group">
        		<label for="company_name" class="col-sm-3 control-label">Supplier Name</label>
        		<div class="col-sm-9">
        			{!! Form::text('company_name', null, array('placeholder'=>'Supplier Name', 'class'=>'form-control')) !!}
        		</div>
    		</div>

            <div class="form-group">
                <label for="short_name" class="col-sm-3 control-label">Short Name</label>
                <div class="col-sm-9">
                    {!! Form::text('short_name', null, array('placeholder'=>'Short Name', 'class'=>'form-control')) !!}
                </div>
            </div>

    		<div class="form-group">
                <label for="bid_value" class="col-sm-3 control-label">Bid Value</label>
                <div class="col-sm-9">
                    {!! Form::number('bid_value', null, array('step'=>'any', 'placeholder'=>'Bid Value', 'class'=>'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                <label for="document" class="col-sm-3 control-label">Select Document</label>
                <div class="col-sm-9 document">
                    {!! Form::file('document', null, array('placeholder'=>'Document', 'class'=>'form-control')) !!}
                        <a href="{{ $supplier->document }}" target="_blank">{{ $supplier->company_name }} Document</a>
                </div>
            </div>

    		<div class="form-group">
    			<div class = "col-sm-offset-3 col-sm-9">
    				<a href="{{ action('SuppliersController@index') }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Cancel</a>
    				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Update Supplier</button>
    			</div>
    		</div>
		{!! Form::close() !!}
    	</div>
    </div>
</div>

@endsection