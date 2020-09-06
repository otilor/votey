@extends('layouts.app')

@section('content')
    <h3 class="text-center">Positions</h3>
    <hr>
    <div class="container">
        @include('inc.messages')
        <ul class="list-group list-group-flush">

            @forelse($poll->positions as $position)
                <li class="list-group-item">{{ $position->title  }}
                        <a href="/student/polls/{{ $poll->id  }}/positions/{{ $position->id  }}" style="float: right" class="btn btn-outline-info">View</a>
                </li>
            @empty
                <p>No positions</p>
            @endforelse
        </ul>
    </div>
@endsection