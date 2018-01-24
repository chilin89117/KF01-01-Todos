@extends('layouts.master')

@section('content')
  <h2>Create a Todo</h2>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form action="{{route('todos.store')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="todo">What I need to do:</label>
            <input type="text" name="todo" class="form-control" placeholder="My todo">
          </div>
          <input type="submit" name="submit" value="Add" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>

  <br><br>

  <h2>Current Todos</h2>
  <hr>
  @If(count($todos)>0)
  <table class="table table-hover table-condensed">
    <tr>
      <th>Things To Do</th>
      <th>Completed?</th>
      <th>Edit?</th>
      <th>Delete?</th>
    </tr>
    @foreach($todos as $todo)
    <tr>
      <td>{{$todo->todo}}</td>
      <td>
        @if(!$todo->completed)

        <!-- Use a form with hidden inputs to update 'completed' column -->
        <form action="{{route('todos.update', ['todo'=>$todo])}}" method="post">
          {{csrf_field()}}
          {{method_field('put')}}
          <input type="hidden" name="todo" value="{{$todo->todo}}">
          <input type="hidden" name="completed" value="1">
          <button type="submit" name="button" class="btn btn-warning btn-xs">Mark as done!</button>
        </form>
        @else
        Completed!
        @endif
      </td>
      <td><a href="{{route('todos.edit', ['todo'=>$todo])}}"
             class="btn btn-success btn-xs">Edit</a></td>
      <td>
        <form action="{{route('todos.destroy', ['todo'=>$todo])}}" method="post">
          {{csrf_field()}}
          {{method_field('delete')}}
          <button type="submit" name="submit" class="btn btn-danger btn-xs">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  @else
  <h3>There are currently no todos.</h3>
  @endif
@endsection
