<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $todos = Todo::all();
        // $todos = Todo::all()->sortBy('title');
        // $todos = Todo::all()->sortBy('is_completed');
        // $todos = Todo::all()->sortByDesc('title');

        $todos = Todo::paginate(5);
        // return $todos;
        // return response()->json([
        //     'success'=>true,
        //     'results'=>$todos
        // ],200);
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | min:3',
            'description' => 'required',
            'is_completed' => 'nullable',
        ]);

        $request->is_completed = $request->is_completed ?? 0;
        Todo::create($request->all());

        // $newTodo = new Todo;
        // $newTodo->title = $request->title;
        // $newTodo->description = $request->description;
        // $newTodo->is_completed = $request->is_completed ?? 0;
        // $newTodo->save();

        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo) //route model binding
    {
        return view('todos.edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        // return $request;
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'is_completed' => 'nullable',
        ]);
        $todo ->is_completed = $request->is_completed ?? 0;
        $todo->update($request->all());

        return redirect()->route('todos.index')->with('success','Todo update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success','Todo delete successfully');
    }
}