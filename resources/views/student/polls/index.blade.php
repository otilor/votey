@extends('layouts.app')

@section('content')
    <h3 class="text-center">Polls</h3>
    <hr>
    <div class="container">
        @include('inc.messages')
        <ul class="list-group list-group-flush">

            @forelse($polls as $poll)
                <form action = "{{ route('student.polls.destroy', $poll->id)  }}"  method="post">
                    @csrf
                    @method('delete')
                </form>
                <li class="list-group-item">{{ $poll->title  }}
                    <a href="{{ route('student.polls.show', $poll->id ) }}" style="float: right" class="btn btn-outline-info">Show</a>
                </li>


            @empty
                <p>No polls</p>
                <a href="{{ route('student.polls.create')  }}" class="btn btn-dark">Create a poll</a>
            @endforelse
        </ul>
    </div>
@endsection