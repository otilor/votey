@extends('layouts.app')

@section('content')
<h3 class="text-center">Sessions</h3>
    <hr>
    <div class="container">
        @include('inc.messages')
        <ul class="list-group list-group-flush">
            @forelse($sessions as $session)
            <li class="list-group-item">{{ $session->title  }}<span style="float: right"><a class="btn btn-danger" href="#">Delete</a> <a class="btn btn-primary" href="/admin/sessions/{{ $session->id  }}/edit">Edit</a></span></li>
            @empty
                <p>No sessions</p>
            @endforelse
        </ul>
    </div>
@endsection