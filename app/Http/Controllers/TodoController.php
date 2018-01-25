<?php
namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function index()
  {
    $todos = Todo::latest()->get();
    return view('todos.index', compact('todos'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'todo' => 'required'
    ]);
    Todo::create(['todo' => $request->todo]);
    return redirect()->back()->with('success', 'Todo successfully added.');
  }
  
  public function edit(Todo $todo)
  { return view('todos/edit', compact('todo')); }
  
  public function update(Request $request, Todo $todo)
  {
    // This function is used to update todos from the 'edit' view
    // and from the 'Mark as complete' button
    $this->validate($request, [
      'todo' => 'required'
    ]);
    if ($todo->todo == $request->todo && $todo->completed == $request->completed) {
      return redirect()->route('todos.index')->with('error', 'Nothing was changed.');
    } else {
      $todo->todo      = $request->todo;
      $todo->completed = $request->completed;
      $todo->save();
      return redirect()->route('todos.index')->with('success', 'Todo successfully updated.');
    }
  }
  
  public function destroy(Todo $todo)
  {
    $todo->delete();
    return redirect()->back()->with('success', 'Todo successfully deleted.');
  }
}