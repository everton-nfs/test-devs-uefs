<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    public function getAllTags()
    {
        $tags = Tag::paginate(10);
        return response()->json($tags->items());
    }
    
    public function getTagById($id)
    {
        $tag = Tag::findOrFail($id);
        return response()->json($tag);
    }
    
    public function createTag(Request $request)
    {
        $tag = Tag::create($request->all());
        return response()->json($tag, 201);
    }
    
    public function updateTag(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());
        return response()->json($tag);
    }

    public function deleteTag($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return response()->json(['message' => 'Tag deleted successfully'], 200);
    }
    
    public function attachToPost(Request $request, $tag_id, $post_id)
    {
        $tag = Tag::findOrFail($tag_id);
        $post = Post::findOrFail($post_id);

        $post->tags()->attach($tag);

        return response()->json(['message' => 'Tag attached to post successfully'], 200);
    }
}
