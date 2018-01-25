@extends('layouts.master')

@section('content')
  <h2>Edit a Todo</h2>
  <a href="{{route('todos.index')}}" class="btn btn-success">Go Back</a>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form action="{{route('todos.update', ['todo'=>$todo])}}" method="post">
          {{csrf_field()}}
          {{method_field('put')}}
          <div class="form-group">
            <label for="todo">What I need to do:</label>
            <input type="text" name="todo" class="form-control" value="{{$todo->todo}}">
          </div>
          <input type="hidden" name="completed" value="{{$todo->completed}}">
          <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
@endsection