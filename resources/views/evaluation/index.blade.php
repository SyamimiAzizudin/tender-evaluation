@extends('layouts.app')

@section('content')

<div class="row evaluation">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>

    <div class="col-lg-12">
        <div class="col-md-3 left-side">
            <div class="pending center border-shadow">
                <span class="count">
                    <h3 class="number mr-full">8</h3>
                    <h4 class="title mr-full">Pending Evaluation</h4>
                </span>
            </div>
            <div class="completed center border-shadow">
                <span class="count">
                    <h3 class="number mr-full">1</h3>
                    <h4 class="title mr-full">Completed</h4>
                </span>
            </div>
        </div>

        <div class="col-md-9 right-side border-shadow mr-full">
            <div class="col-lg-12 full">
                <div class="col-md-4">
                    <h3 class="page-header"> List of Projects </h3>
                </div>
                <div class="col-md-8">
                    <div class="dropdown pull-right">
                        <button class="btn btn-sort dropdown-toggle" type="button" data-toggle="dropdown">Sort by
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Title</a></li>
                            <li><a href="#">Price</a></li>
                            <li><a href="#">Date Modified</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 full">
                <table align="center" class="table table-striped table-bordered"> 
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name of Project</th>
                        <th>Reference No</th>
                        <th>Status</th>
                    </tr>
                    <?php $i = 01 ?>
                    @forelse($evaluates as $evaluate)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>
                            <a href="{{ url('/pro-evaluation/') }}" class="">{{ $evaluate->projects->title }}</a>
                        </td>
                        <td>{{ $evaluate->projects->reference_no }}</td>
                        <td class="success"></td>
                    </tr>
                    <tr>
                        <td class="text-center">02</td>
                        <td>IT Equipment for Lab</td>
                        <td>RFQ18/29</td>
                        <td class="success">Evaluated</td>
                    </tr>
                    <tr>
                        <td class="text-center">03</td>
                        <td>Renovation of Etc</td>
                        <td>RFQ18/29</td>
                        <td class="error">Not Evaluated</td>
                    </tr>
                    <tr>
                        <td class="text-center">04</td>
                        <td>IT Equipment for Lab</td>
                        <td>RFQ18/29</td>
                        <td class="error">Not Evaluated</td>
                    </tr>
                    <?php $i++ ?>
                    @empty
                    <tr>
                        <td colspan="4">Looks like there is no evaluation available.</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
   </div>
</div>
        
@endsection