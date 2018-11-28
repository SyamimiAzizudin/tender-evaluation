@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
		<ol class="breadcrumb">
		    <li><a href="{{ url('/home') }}">Sourcing</a></li>
		    <li><a href="{{ url('/report') }}">Report</a></li>
		    <li class="active">{Name of project}</li>
		</ol>
	</div>
</div>

<div class="row supplier full users report">
	<div class="col-md-12 full">
		<!-- Note -->
		<div class="col-md-3 left-side border-shadow note primary-box note-box">
			<h3 class="page-header white">Note:</h3>
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


	<!-- Criteria, Suppliers, Evaluators -->
	<div class="cs-section full report next">
		<!-- Criteria -->
		<div class="col-md-4 border-shadow">
			<h3 class="page-header">1. Criteria</h3>
			<table align="center" class="table table-striped table-bordered">
				<tr>
					<th>Criteria</th>
					<th>Type</th>
					<th class="text-center">Weightage</th>
				</tr>
				<?php $i = 1 ?>
				<tr>
					<td>Commercial</td>
					<td>Commercial</td>
					<td class="text-center">30</td>
				</tr>
				<tr>
					<td>Delivery</td>
					<td>Technical</td>
					<td class="text-center">20</td>
				</tr>
				<tr>
					<td>Company Credit</td>
					<td>Technical</td>
					<td class="text-center">30</td>
				</tr>
				<?php $i++ ?>
			</table>
		</div>
		<!-- Suppliers -->
		<div class="col-md-4 border-shadow middle-box">
			<h3 class="page-header">2. Suppliers</h3>
			<table align="center" class="table table-striped table-bordered">
				<tr>
					<td>Name</td>
					<td class="text-center">Price (RM)</td>
				</tr>
				<?php $i = 1 ?>
				<tr>
					<td>Company A</td>
					<td class="text-center">28,000</td>
				</tr>
				<tr>
					<td>Company B</td>
					<td class="text-center">33,000</td>
				</tr>
				<tr>
					<td>Company C</td>
					<td class="text-center">28,990</td>
				</tr>
				<?php $i++ ?>
			</table>
		</div>
		<!-- Evaluators -->
		<div class="col-md-4 border-shadow mr-full">
			<h3 class="page-header">3. Evaluators</h3>
			<table align="center" class="table table-striped table-bordered">
				<tr>
					<td>Name</td>
					<td>Role</td>
					<td>Evaluated On</td>
				</tr>
				<?php $i = 1 ?>
				<tr>
					<td>Edwin</td>
					<td>Evaluator</td>
					<td>Evaluated &nbsp; 10 2018</td>
				</tr>
				<tr>
					<td>Syamimi</td>
					<td>Evaluator</td>
					<td>Not Evaluated<a href="#">&nbsp;<img src="{{ asset('img/mail.png') }}"></a></td> 
				</tr>
				<tr>
					<td>Hanif</td>
					<td>Evaluator</td>
					<td>Not Evaluated<a href="#">&nbsp;<img src="{{ asset('img/mail.png') }}"></a></td> 
				</tr>
				<?php $i++ ?>
			</table>
		</div>
	</div> <!-- .cs-section -->

	<!-- Detail Report -->
	<div class="cs-section border-shadow summary detailed">
	    <h3 class="page-header">Detailed Report</h3>
	    <table align="center" class="table table-striped table-bordered"> 
	        <tr>
	            <th width="20%">Description</th>
	            <th width="15%" class="center">Weightage</th>
	            <th width="10%" class="center">Company A</th>
	            <th width="10%" class="center">Company B</th>
	            <th width="10%" class="center">Company C</th>
	        </tr>
	        <tr>
	            <td>Commercial</td>
	            <td class="center">30</td>
	            <td class="center">30</td>
	            <td class="center">20</td>
	            <td class="center">25</td>
	        </tr>
	        <tr>
	        	<td>Delivery</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        </tr>
	        <tr>
	        	<td>Specification</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        </tr>
	        <tr>
	        	<td>Company Credit</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        	<td class="center">20</td>
	        </tr>
	        <tr>
	            <td>Technical</td>
	            <td class="center">70</td>
	            <td class="center">68</td>
	            <td class="center">69.2</td>
	            <td class="center">65</td>
	        </tr>
	        <tr>
	            <td><b>Total</b></td>
	            <td class="center">100</td>
	            <td class="center">98</td>
	            <td class="center">98.2</td>
	            <td class="center">95</td>
	        </tr>
	        <tr>
	            <td colspan="2"><b>Rank</b></td>
	            <td class="center">2</td>
	            <td class="center">1</td>
	            <td class="center">3</td>
	        </tr>
	    </table>
	</div><!-- .cs-section -->

	<!-- Detail Evaluation by Evaluators -->
	<div class="cs-section next border-shadow summary detailed">
		<h3 class="page-header">Detailed Evaluation by Evaluators</h3>
		<table align="center" class="table table-striped table-bordered">
			<tr>
		        <th width="20%">Evaluators</th>
		        <th width="10%" class="center"><a href="{{ url('/report/company') }}">Company A</a></th>
		        <th width="10%" class="center"><a href="{{ url('/report/company') }}">Company B</a></th>
		        <th width="10%" class="center"><a href="{{ url('/report/company') }}">Company C</a></th>
		    </tr>
		    @for( $i = 0; $i < 3; $i++ )
		    <tr>
		    	<td><a href="{{ url('/report/evaluator') }}">Edwin</a></td>
		    	<td class="center">50</td>
		    	<td class="center">50</td>
		    	<td class="center">50</td>
		    </tr>
		    @endfor
		</table>
	</div>
	<div class="report text-center">
	    <a href="#" class="btn btn-primary">View Detailed Report</a>
	    <a href="#" class="btn manage">Export to XLS</a>
	    <a href="#" class="btn manage">Export to CSV</a>
	</div>
</div>
@endsection('content')