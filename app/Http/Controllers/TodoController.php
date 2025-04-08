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
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
