<?php
namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		$Post = Post::all();
		return response()->json($Post);
	}

	public function getPost($id){
        $Post  = Post::find($id);
        return response()->json($Post);
    }

    public function createPost(Request $request){
        $Post = Post::create($request->all());
        return response()->json($Post);
    }

    public function deletePost($id){
        $Post  = Post::find($id);
        $Post->delete();
        return response()->json('deleted');
    }

    public function updatePost(Request $request,$id){
        $Post  = Post::find($id);
        $Post->title = $request->input('title');
        $Post->author = $request->input('author');
        $Post->tags = $request->input('tags');
        $Post->content = $request->input('content');
        $Post->save();

        return response()->json($Post);
    }
}