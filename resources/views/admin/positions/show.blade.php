@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">{{ $position->title  }}</h2>
        <hr>

        <h5 class="text-uppercase">contestants</h5>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Votes</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($position->contestants); $i++)
            <tr>
                <th scope="row">1</th>
                <td>{{ $position->contestants[$i]->user->name  }}</td>
                <td>{{ $position->contestants[$i]->votes  }}</td>
            </tr>
            @endfor
            </tbody>
        </table>
        @empty($position->contestants)
            <p>No contestants</p>
        @endempty
        <a class="btn btn-success" href="/admin/polls/{{ $position->poll_id  }}/positions/{{ $position->id  }}/contestants/create">Create</a>
    </div>
@endsection