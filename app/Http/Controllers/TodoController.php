<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Todos/Index', [
            'todos' => auth()->user()->todos()->latest()->get(), // Fetch todos for the authenticated user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Todos/Create'); // Fixed capitalization for consistency
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $request->user()->todos()->create($validated);

        return redirect()->route('todos.index')->with('success', 'Todo created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        // Implementation can be added as needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo) // Changed parameter type to Todo for consistency
    {
        return inertia('Todos/Edit', [
            'todo' => $todo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        $todo->update($validated);

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
       // $this->authorize('delete', $todo);
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully!');
    }

}
