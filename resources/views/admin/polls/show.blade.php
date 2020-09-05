@extends('layouts.app')

@section('content')
    <h4 class="text-center">Poll details</h4>

    <div class="container">
        <p>Title: {{ $poll->title  }}</p>
        <p>Session: {{ $poll->session_title  }}</p>

    <hr>
        <p class="text-center">Contestants</p>
        @forelse($poll->contestants as $contestant)
            <p>Whatever</p>
        @empty
            <p>No contestants yet!</p>
        @endforelse
        <a href="{{ route('admin.polls.index')  }}/{{ $poll->id  }}/contestants/create" class="btn btn-success">Add</a>
    </div>

@endsection