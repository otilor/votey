@extends('layouts.app')

@section('content')
<div class="row text-center mx-auto">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manage sessions</h5>
                <p class="card-text">Create, edit, update and delete sessions</p>
                <a href="/admin/sessions" class="btn btn-dark">Manage sessions</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manage polls</h5>
                <p class="card-text">Create, edit, update and delete sessions</p>
                <a href="/admin/polls" class="btn btn-primary">Manage polls</a>
            </div>
        </div>
    </div>
</div>
@endsection