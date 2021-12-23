<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PostsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth' , ['except'=>['index' , 'show']] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::all();
        // dd($post);
        return view('blog.index')->with('posts' , Post::orderBy('updated_at' , 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = uniqid() . '-'. $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('image'),$newImageName);

        $slug = SlugService::createSlug(Post::class , 'slug' , $request->title);
        
        Post::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug' => $slug ,
            'image_path' => $newImageName ,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')->with('message' ,'successfully  your post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')->with('post' , Post::where('slug' , $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('post' , Post::where('slug' , $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
             
        ]);
        $newImageName = uniqid() . '-'. $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('image'),$newImageName);

        Post::where('slug' , $slug)->update([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug' => $slug ,
            'image_path' => $newImageName ,
            'user_id' => auth()->user()->id
        ]) ;
        return redirect('/blog')->with('message' ,'successfully  your post has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug' , $slug);
        $post->delete();
        return redirect('/blog')->with('message' ,'successfully  your post has been Deleted');
    }
}



// create
// /blog/create

// read 
// /blog

// update  - PUT or PATCH
// /blog/{slug} or id

// delete = DELETE
// /blog/{slug} or id


// SHOW = GET
// /blog/{id}

// edit 
// /blog/{id}/edit