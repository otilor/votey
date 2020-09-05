@extends('layouts.app')
@section('content')
    <h3 class="text-center">Polls</h3>
    <hr>
    <div class="container">

        @include('inc.messages')
        <table class="table table-hover my-1">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Session</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($polls); $i++)
                <tr>
                    <th scope="row">{{ $i+1  }}</th>
                    <td>{{ $polls[$i]->title  }}</td>
                    <td>{{ $polls[$i]->session_title  }}</td>
                    <td><a href="{{ route('admin.polls.index')  }}/{{ $polls[$i]->id  }}" class="btn btn-info text-white">View</a></td>
                </tr>
            @endfor
            </tbody>
        </table>

        <a class="btn btn-dark" href="{{ route('admin.polls.create')  }}">Create a new poll</a>
    </div>
@endsection