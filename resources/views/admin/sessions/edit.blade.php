@extends('layouts.app')

@section('content')
    <h3 class="text-center">Edit session</h3>
    <hr>
    <div class="container">
        <form action = "/admin/sessions/{{$session->id}}" method="post">
            @method('patch')
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" value = "{{ $session->title }}" class="form-control" id="exampleFormControlInput1" name = "title">
            </div>
            <div class="form-group">
                <input type="submit" value = "Update" class="btn btn-outline-success form-control" id="exampleFormControlInput1">
            </div>
        </form>
    </div>

@endsection