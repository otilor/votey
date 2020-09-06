@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">{{ $poll->title  }}</h2>
        <hr>

        <h5 class="text-uppercase">Positions</h5>
        @forelse($poll->positons as $position)
        <div class="card">
            <div class="card-header">{{ $position->title  }}</div>
            <div class="card-body">Description</div>
        </div>
        @empty
            <p>No contestants</p>
        @endforelse
    </div>
@endsection