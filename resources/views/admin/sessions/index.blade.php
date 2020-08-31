@extends('layouts.app')

@section('content')
<h3 class="text-center">Sessions</h3>
    <hr>
    <div class="">
        <ul class="list-group list-group-flush">
            @forelse($sessions as $session)
            <li class="list-group-item">{{ $session->title  }}<span style="float: right" class="btn btn-danger">Delete</span><span style="float: right" class="btn mx-1 btn-primary">Edit</span></li>
            @empty
                <p>No sessions</p>
            @endforelse
        </ul>
    </div>
@endsection