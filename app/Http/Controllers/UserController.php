<?php

namespace App\Http\Controllers;

// use App\Models\Category;
// use App\Models\Post;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $users = User::paginate(10); // Paginate users, adjust number as needed
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {

        $validated = $request->validated();
        // $validated['password'] = bcrypt($validated['password']); // Hash password
        if (empty($validated['password'])) {
            $validated['password'] = bcrypt('defaultpassword');
        }
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }
        if ($request->hasFile('profile_photo')) {
            $validated['profile_photo'] = $request->file('profile_photo')->store('profile_photos', 'public');
        }
        User::create($validated);
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        $users = User::withCount('posts')->get();
        return view('users.show', compact('users'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();

        // Remove password if empty or not provided
        if (empty($validated['password'])) {
            unset($validated['password']);
        } else {
            $validated['password'] = bcrypt($validated['password']); // Hash password if provided
        }

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $validated['profile_photo'] = $request->file('profile_photo')->store('profile_photos', 'public');
        }

        $user->fill($validated);
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
