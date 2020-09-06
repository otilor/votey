@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">{{ $position->title  }}</h2>
        <hr>

        <h5 class="text-uppercase">contestants</h5>
        @forelse($position->contestants as $contestant)
            <div class="card my-2">
                <div class="card-header py-2">{{ $contestant->user->name  }}</div>
            </div>
        @empty
            <p>No contestants</p>
        @endforelse
        <a class="btn btn-success" href="/admin/polls/{{ $position->poll_id  }}/positions/{{ $position->id  }}/contestants/create">Create</a>
    </div>
@endsection