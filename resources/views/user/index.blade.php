@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li class="active">Users</li>
        </ol>
    </div>
</div>

<div class="row users">
    <div class="col-md-12 full">
        <!-- user count -->
        <div class="col-md-3 left-side border-shadow">
            <div class="pending center">
                <span class="count col-md-6">
                    <h3 class="number mr-full">8</h3>
                    <h4 class="title">Owners</h4>
                </span>
                <span class="count col-md-6">
                    <h3 class="number mr-full">10</h3>
                    <h4 class="title">Evaluators</h4>
                </span>
                <a href="{{ action('UsersController@create') }}" class="btn manage">Create New User</a>
            </div>
        </div>
        <!-- Supplier List -->
        <div class="col-md-9 right-side border-shadow mr-full">
            <div class="col-md-4 box-header">
                <h3 class="header">List of Users</h3>
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
            <table class="table table-stripped table-bordered">
                <tr>
                    <th width="1%">ID</th>
                    <th>Name</th>
                    <th>Roles</th>
                    <th>Created by</th>
                    <th>Last Active</th>
                    <th>Reinvite</th>
                </tr>
                @for($i = 1; $i < 7; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td><a href="{{ url('/html/user') }}">{user's name}</a></td>
                        @for($j = 0; $j < 3; $j++)
                            <td>Hello</td>
                        @endfor
                        <td><a href="#">&nbsp;<img src="{{ asset('img/mail.png') }}"></a></td>
                    </tr>
                @endfor
            </table>
        </div>
    </div>
</div>

@endsection