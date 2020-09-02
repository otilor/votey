@extends('layouts.app')

@section('content')
    <h3 class="text-center">Polls</h3>
    <hr>
    <div class="container">
        <a class="btn btn-dark" href="{{ route('polls.create')  }}">Create a new poll</a>
        @include('inc.messages')
        <ul class="list-group list-group-flush">
            @forelse($polls as $poll)
                <li class="list-group-item">{{ $poll->title  }}<span style="float: right"><a class="btn btn-danger" href="#">Delete</a> <a class="btn btn-primary" href="/admin/sessions/{{ $session->id  }}/edit">Edit</a></span></li>
            @empty
                <hr>
                <div>
                    <h4>No sessions</h4>
                </div>
            @endforelse
        </ul>
    </div>
@endsection