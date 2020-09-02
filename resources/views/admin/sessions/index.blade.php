@extends('layouts.app')

@section('content')
<h3 class="text-center">Sessions</h3>
    <hr>
    <div class="container">
        @include('inc.messages')
        <ul class="list-group list-group-flush">

            @forelse($sessions as $session)
                <form action = "{{ route('admin.sessions.destroy', $session->id)  }}"  method="post" id = "deleteSessionForm">
                    @csrf
                    @method('delete')
                </form>
                    <li class="list-group-item">{{ $session->title  }}
                            <a href="{{ route('admin.sessions.edit', $session->id ) }}" style="float: right" class="btn btn-outline-info">Edit</a>
                            <a href="javascript:document.getElementById('deleteSessionForm').submit()" style="float: right" class="mr-2 btn btn-outline-danger">Delete</a>
                    </li>


            @empty
                <p>No sessions</p>
                <a href="{{ route('admin.sessions.create')  }}" class="btn btn-dark">Create a session</a>
            @endforelse
        </ul>
    </div>
@endsection