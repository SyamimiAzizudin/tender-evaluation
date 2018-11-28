@extends('layouts.app')

@section('content')

<div class="row evaluation">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="col-md-3 left-side">
            <div class="pending center border-shadow project-count">
                <span class="count">
                    <h3 class="number mr-full">{{ $pending_eva_count }}</h3>
                    <h4 class="title mr-full">Pending Evaluation</h4>
                </span>
            </div>
            <div class="completed center border-shadow project-count">
                <span class="count">
                    <h3 class="number mr-full">{{ $completed_eva_count }}</h3>
                    <h4 class="title mr-full">Completed</h4>
                </span>
            </div>
        </div>

        <div class="col-md-9 right-side border-shadow mr-full">
            <div class="col-md-4">
                <h3 class="page-header"> List of Projects </h3>
            </div>
            <div class="col-md-8">
                <form class="pull-right">
                    <select class="form-control btn-sortby">
                        <option>Sort By</option>
                        <option>Title</option>
                        <option>Price</option>
                        <option>Date Modified</option>
                    </select>
                </form>
            </div>
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
                        <a href="{{ url('/evaluation/') }}/{{ $evaluate->id }}" class="">{{ $evaluate->projects->title }}</a>
                    </td>
                    <td>{{ $evaluate->projects->reference_no }}</td>
                    <td class="">{{ $evaluate->projects->status }}</td>
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
        
@endsection