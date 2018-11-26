@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li class="active">Dashboard</li>
        </ol>
   </div><!-- .col-md-12 -->
</div><!-- .row -->

<div class="row">
   <div class="col-md-12">
   		<div class="col-md-3 left-side border-shadow">
   			<div class="pending center">
   				<span class="count">
					<h3 class="number mr-full">8</h3>
	   				<h4 class="title">Pending Evaluation</h4>
	   			</span>
            	<a href="{{ action('ProjectsController@add') }}" class="">Create New Project</a>
   			</div>
   		</div><!-- .col-md-3 -->

   		<div class="col-md-9 right-side border-shadow mr-full">
			<div class="col-md-4 full">
				<h3 class="header"> List of Projects </h3>
			</div>
			<div class="col-md-8 full">
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
            <table align="center" class="table table-striped table-bordered"> 
                <tr>
                    <th class="text-center">ID</th>
                    <th>Name of Project</th>
                    <th>Reference No</th>
                    <th>Created by</th>
                    <th>Closing Date</th>
                    <th>Status</th>
                    <th>Date Modified</th>
                    {{-- <th></th> --}}
                </tr>
                <?php $i = 01 ?>
                @forelse($projects as $project)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td>
                        <a href="{{ url('/project/') }}/{{ $project->id }}" class="">{{ $project->title }}</a>
                    </td>
                    <td>{{ $project->reference_no }}</td>
                    <td>
                    	@if($project->created_by != null)
                            {{ $project->users->name }}
                        @endif
                    </td>
                    <td>{{ Carbon\Carbon::parse($project->closing_date)->format('d F Y') }}</td>
                    <td>{{ $project->status }}</td>
                    <td>{{ Carbon\Carbon::parse($project->updated_at)->format('d F Y') }}</td>
                    {{-- <td>
                    	 @if( $project->id)
                            <a href="{{ action('ProjectsController@edit', $project->id) }}" class="btn btn-success btn-xs">Edit</a>
                        @endif
                    </td> --}}
                </tr>
                <?php $i++ ?>
                @empty
                <tr>
                    <td colspan="6">Looks like there is no project available.</td>
                </tr>
                @endforelse
            </table>
   		</div><!-- .col-md-9 -->
   </div><!-- .col-md-12 -->
</div><!-- .row -->

@endsection