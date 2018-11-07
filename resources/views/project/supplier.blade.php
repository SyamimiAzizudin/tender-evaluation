@extends('layouts.app')
    
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Project - Supplier List</h3>
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Home </a></li>
            <li class="active">Project - Supplier List</li>
        </ol>
        <div class="col-md-8">
            <div class="list-suppliers">
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Supplier</th>
                    </tr>
                    <?php $i=1 ?>
                    @forelse ($suppliers as $supplier)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>
                            <a href="{{ url('/project-supplier/') }}/{{ $supplier->id }}" class="">{{ $supplier->company_name }}</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @empty
                    <tr>
                        <td colspan="6">Looks like there is no supplier available.</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@endsection