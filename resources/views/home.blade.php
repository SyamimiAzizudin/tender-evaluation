@extends('layouts.app')

@section('content')
<div class="container">

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Main</h1>
        </div>
    </div>

    <!-- Sign In form -->
    <div class="row row1">
        <div class="col-md-8 col-md-offset-2 padding1">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a type="button" href="{{ url('/dashboard') }}" class="btn btn-lg btn-primary custom1">Main Dashboard</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a type="button" href="{{ url('/supplier') }}" class="btn btn-lg btn-primary custom1">Suppliers</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a type="button" href="{{ url('/user') }}" class="btn btn-lg btn-primary custom1">Users</a>
            </div>
        </div>
    </div>
    <div class="row row1">
        <div class="col-md-8 col-md-offset-2 padding2">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a type="button" href="{{ url('/project-supplier') }}" class="btn btn-lg btn-primary custom1">Projects</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a type="button" href="{{ url('/criteria') }}" class="btn btn-lg btn-primary custom1">Criteria</a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <a type="button" href="{{ url('/evaluation') }}" class="btn btn-lg btn-primary custom1 margin-left-savingsbutton">Evaluations</a>
            </div>
       </div>
    </div>

</div>
@endsection
