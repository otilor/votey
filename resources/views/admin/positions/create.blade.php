@extends('layouts.app')
@section('content')
    <div class="container">
        <h5 class="text-center">Create a new position</h5>
        <form action = "/admin/polls/{{ $id  }}/positions" method="post">
            @csrf
            @include('inc.messages')

                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input name = "title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="General secretary" required>
                </div>
                <input type="hidden" value="{{ $id  }}" name = "poll_id">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <textarea name = "description" class="form-control"></textarea>
                </div>

            <div class="form-group">
                <input type="submit" class="form-control btn btn-success" value="Submit">
            </div>

        </form>
    </div>

@endsection