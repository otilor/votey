@extends('layouts.app')
@section('content')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Year</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2020/2021">
            </div>

            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>

@endsection