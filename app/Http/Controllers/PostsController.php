<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
        $this->middleware('auth',['except'=>'show']);
     }

    public function index()
    {
        $posts=Post::all();
        return view('posts/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            ['title'=>'required','max:255'],
            ['body'=>'required'],
            //dd($request->all()),
    );
         //one way to save to database
      /* $title = $request->input('title');
      $body = $request->input('body');
      $user = Auth::user(); 
      $post = new Post();
      $post->title = $title;
      $post->body = $body;
      $post->user_id = $user->id;
      $post->save(); */
      //dd($user->id);

      //other way to save to database preferred
      $user = Auth::user();
      $input = $request->all();
      $body = strip_tags($request->input('body'));
    
       $user->posts()->create($input);
      return redirect()->route('post.index')->with('success', 'Post Created'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::findOrFail($id);
       return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // edit post
        $request->validate(
            ['title'=>'required','max:255'],
            ['body'=>'required'],
           
    );

      $post = Post::findOrFail($id); 
      $title = $request->input('title');
      $post->title = $title;
      $body = $request->input('body');
      $post->body = $body;
      $post->save();
    
      return redirect()->route('post.index')->with('success', 'Post Edited'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Post Deleted');
    }
}
