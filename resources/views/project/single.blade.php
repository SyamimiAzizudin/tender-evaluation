@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')

<div class="row single project">
    <div class="col-lg-12 full">
    	<ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/project-dashboard') }}">Project</a></li>
            <li class="active">{{ $project->title }}</li>
        </ol>
        <div class="col-md-12 full">
        	<div class="col-md-3 left-side border-shadow note">
                <div class="page-header">
                    <h3 class="title mr-full">Note:</h3>
                </div>
                <div>
                    <div class="project">
                        Empty Project
                    </div>
                    <div class="link">
                        <a href="#">View Report</a>
                        <a href="#">Date Created</a>
                    </div>
                    <div class="save form-inline">
                        {!! Form::text('name', null, array('placeholder' => 'Open','class' => 'form-control')) !!}
                        <button type="submit" class="btn manage mr-full">Save</button>
                    </div>
                </div>
        	</div>
        	<div class="col-md-9 right-side border-shadow">
                <div class="col-sm-12 full">
                    <div class="col-sm-6 title full">
                        <h4 class="lbl">Project Title</h4>
                        <h3 class="page-header"> {{ $project->title }} </h3>
                    </div>
                    <div class="col-sm-6 ref-no full">
                        <h4 class="lbl">Reference Number</h4>
                        <h3 class="page-header"> {{ $project->reference_no }} </h3>
                    </div>
                </div>
                <div class="desc">
                    <h4 class="lbl">Project Description</h4>
                    <p class="details"> {{ $project->description }} </p>
                </div>
        	</div>
        </div>

        <div class="col-md-12 full next">
            <div class="col-md-4 border-shadow">
                <h3 class="page-header">1. Criterias</h3>
                <table align="center" class="table table-striped table-bordered"> 
                    <tr>
                        <th>Criteria</th>
                        <th>Type</th>
                        <th>Weightage</th>
                    </tr>
                    <?php $i = 1 ?>
                    <tr>
                        <td>Commercial</td>
                        <td>Commercial</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Specification</td>
                        <td>Technical</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>Technical</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Company Credit</td>
                        <td>Technical</td>
                        <td>30</td>
                    </tr>
                    <?php $i++ ?>
                </table>
                <a href="#" class="btn-add">Add Criteria</a>
                <a href="{{ url('/project/criteria') }}/{{ $project->id }}" class="btn manage pull-right">Manage Criteria</a>
            </div>
            <div class="col-md-3 border-shadow">
                <h3 class="page-header">2. Suppliers</h3>
                <table align="center" class="table table-striped table-bordered"> 
                    <tr>
                        <th>Name</th>
                        <th>Total Score</th>
                    </tr>
                    <?php $i = 1 ?>
                    <tr>
                        <td>Company A</td>
                        <td>28,000</td>
                    </tr>
                    <tr>
                        <td>Company B</td>
                        <td>33,000</td>
                    </tr>
                    <tr>
                        <td>Company C</td>
                        <td>28,990</td>
                    </tr>
                    <?php $i++ ?>
                </table>
                <a href="#" class="btn-add">Add Supplier</a>
                <a href="{{ url('/project/supplier') }}/{{ $project->id }}" class="btn manage pull-right">Manage Supplier</a>
            </div>
            <div class="col-md-4 border-shadow mr-full">
                <h3 class="page-header">3. Evaluators</h3>
                <table align="center" class="table table-striped table-bordered"> 
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Evaluated On</th>
                    </tr>
                    <?php $i = 1 ?>
                    <tr>
                        <td>Edwin</td>
                        <td>Evaluator</td>
                        <td>Evaluated &nbsp; 10 Oct 2018</td> 
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
                <a href="#" class="btn-add">Add Evaluator</a>
                <a href="{{ url('/project/evaluator') }}/{{ $project->id }}" class="btn manage pull-right">Manage Evaluator</a>
            </div>
        </div>

        <div class="col-md-12 border-shadow summary">
            <h3 class="page-header">Summary Report</h3>
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
                    <td>Technical</td>
                    <td class="center">70</td>
                    <td class="center">68</td>
                    <td class="center">69.2</td>
                    <td class="center">65</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td class="center">100</td>
                    <td class="center">98</td>
                    <td class="center">98.2</td>
                    <td class="center">95</td>
                </tr>
                <tr>
                    <td colspan="2">Rank</td>
                    <td class="center">2</td>
                    <td class="center">1</td>
                    <td class="center">3</td>
                </tr>
            </table>
            <p class="nothing">No Criteria Set, No Evaluators, Not Evaluated, No Suppliers</p>
            <div class="report pull-right">
                <a href="#" class="btn btn-primary">View Detailed Report</a>
                <a href="#" class="btn manage">Export to XLS</a>
                <a href="#" class="btn manage">Export to CSV</a>
            </div>
        </div>
        
 	</div>
</div>

@endsection