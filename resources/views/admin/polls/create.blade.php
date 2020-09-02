@extends('layouts.app')
@section('content')
    <div class="container">
        <form action = "/admin/polls?returnTo={{ route('admin.polls.create')  }}" method="post">
            @csrf
            @include('inc.messages')
            @if(count($sessions)  < 1)
                <h4>Heads up! Looks like there are no sessions. 🙃🙃🙃</h4>
                <a href="{{ route('admin.sessions.create')  }}" class="btn btn-outline-dark btn-lg">Create 😄</a>
            @else

                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input name = "title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Executive poll" required>
                </div>

                <div class="form-group">
                    <select name = "session_title"  class="form-control" required>
                        <option disabled selected value> -- choose a session -- </option>
                        @foreach($sessions as $session)
                            <option>{{ $session->title  }}</option>
                        @endforeach
                        <input type="submit" class="btn btn-success" value="Submit">
                    </select>
                </div>

            @endif


        </form>
    </div>

@endsection