@extends('layouts.app')

@section('content')'
<div class="row text-center mx-auto">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create sessions</h5>
                <p class="card-text">Create different academic sessions</p>
                <a href="{{ route('admin.sessions.create')  }}" class="btn btn-dark">Create</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create polls</h5>
                <p class="card-text">Create different polls for one or more sessions </p>
                <a href="{{ route('admin.polls.create')  }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
</div>
@endsection