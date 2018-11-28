@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 full">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Sourcing</a></li>
            <li><a href="{{ url('/user') }}">Users</a></li>
            <li class="active">{Name of user}</li>
        </ol>
    </div>
</div>

<div class="row supplier user">
    <!-- Note -->
    <div class="col-md-12 full">
        <div class="col-md-3 left-side border-shadow note-box note ghost-box">
            <h3 class="header">Note:</h3>
            <p >This is a list of suppliers. Click on the suppliers to know more about the supplier.</p>
        </div>
        <!-- user detail -->
        <div class="col-md-9 inner">
            <div class="row right-side border-shadow ">
                <h3 class="header">{Name of User}</h3>
                <table align="center" class="table table-stripped table-bordered">
                <tr>
                    <th>Project Participated</th>
                </tr>
                @for($i = 0; $i < 3; $i++)
                    <tr>
                        <td><a href="{{ url('#') }}">Project A</a></td>
                    </tr>
                @endfor
            </table>
            </div>
            <div class="row right-side border-shadow second">
                <h3 class="header">User Settings</h3>
                <div class="col-md-12">
                    <form>
                        <div class="form-group row">
                            <input type="text" class="form-control form-create col-md-5" placeholder="Name">
                        </div>
                        <div class="form-group row">
                            <input type="email" class="form-control form-create col-md-5" placeholder="Email">
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control form-create col-md-5" name="password" placeholder="Password">
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn manage btn-save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection