@extends('layouts.app')

@section('content')
    <div class="container">
        @include('inc.messages')
    </div>
<div class="row text-center mx-auto">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manage accounts</h5>
                <p class="card-text">You can create, view update and delete accounts for various users</p>
                <a href="/admin/accounts/dashboard" class="btn btn-dark">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Election manager</h5>
                <p class="card-text">You can manage election... i.e. create polls and positions with different contestants</p>
                <a href="/admin/election/dashboard" class="btn btn-success">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
@endsection