@extends('layouts.app')
@section('content')
    <div class="container">
        <form action = "{{ route('admin.polls.index')  }}/{{ $id  }}/positions/{{ $position  }}/contestants" method="post">
            @csrf
            @include('inc.messages')
            <input type="hidden" value="{{ $position }}" name = "position_id">
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Choose user</label>
                    <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                        @forelse($users as $user)
                        <option>{{ $user->id . ". " . $user->name }}</option>
                        @empty
                            <p>No contestants, yet!</p>
                        @endforelse
                    </select>
                </div>


            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>

@endsection