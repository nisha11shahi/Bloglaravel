<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $Post = new Post;
        $Post->title= $request->get('title');
        $Post->body = $request->get('body');
        $Post->author = $request->get('user_name');
        $Post->save();

        return redirect()->back();    }

        
        public function showall()
        {
            $posts=Post::all();
            return view('post')->with('posts',$posts );
        }
        public function destroy($id){
            $post=Post::find($id);
            $post->delete();
            return redirect()->back();
        }
        public function viewPost($id){
            $posts=Post::find($id);
            return view('viewpost')->with('posts',$posts);
        }
}
