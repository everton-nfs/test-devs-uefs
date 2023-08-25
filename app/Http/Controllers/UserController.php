<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function getAllUsers()
    {
        $users = User::paginate(10);
        return response()->json($users->items());
    }

    public function getAllUsersAndPosts()
    {
        $users = User::with('posts')->paginate(10);
        return response()->json($users->items());
    }
    
    public function getUserById($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
    
    public function createUser(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }
    
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }
    
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(null, 204);
    }

}
