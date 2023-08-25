<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function getAllPosts()
    {
        $posts = Post::paginate(10);
        return response()->json($posts->items());
    }

    public function getPostById($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    public function createPost(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return response()->json($post);
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(null, 204);
    }
    
}
