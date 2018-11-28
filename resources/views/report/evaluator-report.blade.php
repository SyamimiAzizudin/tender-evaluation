@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/report') }}">Report</a></li>
            <li><a href="{{ url('/report/project') }}">{Name of project}</a></li>
            <li class="active">{Name of Evaluator}</li>
        </ol>
    </div>
</div>

<div class="row users report">
    <div class="cs-section full">
        <!-- Note -->
    	<div class="col-md-3 left-side border-shadow note ghost-box note-box">
    		<h3 class="page-header">Note:</h3>
    		<ul>
    			<li>Criteria: 7</li>
    			<li>Suppliers: 3</li>
    			<li>Evaluators: 5</li>
    		</ul>
    	</div>
        <!-- Project info -->
    	<div class="col-md-9 right-side border-shadow project-title-box">
            	<small class="ghost-text">Project title</small>
            	<small class="ghost-text pull-right text-right">Project name</small>
            	<div class="row">
    	        	<h3 class="col-md-6">Project A</h3>
    	        	<h3 class="col-md-6 text-right">RFQ 18/102</h3>        		
            	</div>
            	<small class="ghost-text">Project title</small>
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt urna in facilisis ultrices. Mauris varius fermentum ante, in commodo lorem porta quis. Vestibulum rhoncus mollis diam ut feugiat. In augue ante, feugiat sed commodo in, tincidunt quis lectus. Praesent mollis blandit quam sed feugiat.</p>
        </div>
    </div><!-- .cs-section -->

    <!-- Detail Evaluation -->
    <div class="cs-section border-shadow next summary detailed">
        <h3 class="page-header">Detailed Evaluation by {Name of Evaluator}</h3>
        <table align="center" class="table table-striped table-bordered"> 
            <tr>
                <th width="20%">Description</th>
                <th width="10%" class="center">Weightage</th>
                <th class="center">Company A</th>
                <th width="10%" class="center"></th>
                <th class="center">Company B</th>
                <th width="10%" class="center"></th>
                <th class="center">Company C</th>
                <th width="10%" class="center"></th>
            </tr>
            <tr>
            	<td>Delivery</td>
            	<td class="center">20</td>
            	<td class="center">20</td>
                <td>Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum </td>
                <td class="center">25</td>
                <td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum </td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum </td>
            </tr>
            <tr>
            	<td>Specification</td>
            	<td class="center">20</td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum </td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum </td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum </td>
            </tr>
            <tr>
            	<td>Company Credit</td>
            	<td class="center">20</td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum</td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum</td>
            	<td class="center">20</td>
            	<td class="center">Lorem ipsum lorem ipsum
    lorem ipsum lorem ipsum</td>
            </tr>
            <tr>
                <td><b>Total</b></td>
                <td class="center">100</td>
                <td class="center">98</td>
                <td class="center"></td>
                <td class="center">98</td>
                <td class="center"></td>
                <td class="center">98.2</td>
                <td class="center"></td>
            </tr>
        </table>
    </div><!-- .cs-section -->
    <div class="report next text-center">
        <a href="#" class="btn btn-primary">View Detailed Report</a>
        <a href="#" class="btn manage">Export to XLS</a>
        <a href="#" class="btn manage">Export to CSV</a>
    </div>
</div>
@endsection('content')