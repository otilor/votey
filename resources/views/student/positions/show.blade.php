@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="text-center">Position details</h4>
        <hr>

        <div>
            <h5>Description</h5>
            <p class="px-5">{{ $position->description  }}</p>
        </div>

        <div class="my-2">
            <h5>Contestants</h5>
            <ul class="list-group list-group-flush">
                @forelse($position->contestants as $contestant)
                    <li class="list-group-item">{{ $contestant->user->name  }} <span class="badge badge-danger">{{ $contestant->votes  }} votes</span>
                        <a href="" style="float: right" class="btn btn-success">Vote</a>
                    </li>
                @empty
                    <p>No contestants, yet. Check later.</p>
                @endforelse
            </ul>

        </div>
    </div>


@endsection