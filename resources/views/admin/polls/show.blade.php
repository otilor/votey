@extends('layouts.app')

@section('content')
    <h4 class="text-center">Poll details</h4>

    <div class="container">
        <p>Title: {{ $poll->title  }}</p>
        <p>Session: {{ $poll->session_title  }}</p>

    <hr>
        <p class="text-center">Positions</p>
        @forelse($poll->positions as $position)
            <p>{{ $position->title  }}</p>
        @empty
            <p>No positions yet!</p>
        @endforelse
        <a href="{{ route('admin.polls.index')  }}/{{ $poll->id  }}/positions/create" class="btn btn-success">Add</a>
    </div>

@endsection