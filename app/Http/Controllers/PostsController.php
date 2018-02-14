<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Session;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index'] ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('workflows.index')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('workflows.create');
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
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);
        $posts = new Post;
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->user_id = auth()->user()->id;
        $posts->save();
        
        Session::flash('success','Post Saved !');
        return redirect()->route('workflows.index', $posts->id );   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $posts = DB::table('posts')->orderBy('created_at', 'desc');
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $posts = Post::orderBy('created_at','desc');
        return view('workflows.show')->with('posts',$posts)->with('posts', $user->posts);

        // return view('workflows.show');
        // return view('workflows.show', ['user_id'=>$user_id, 'user'=>$user, 'posts'=>$posts]);
        //return view('workflows.show', compact('user','posts'));
    }
       
    public function showpost($id)
    {
        $posts = Post::find($id);
        return view('workflows.posts')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !== $posts->user_id){
            return redirect('workflows.index')->with('error', 'Unauthorized page');
        }
        return view('workflows.edit')->with('posts',$posts);
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
        //Update the Post
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);
        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->save();
        
        Session::flash('updated','Post Updated !');
        return redirect()->route('workflows.show', $posts->id );   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $posts = Post::find($id);
        $posts->delete();
          
        Session::flash('deleted','Post Deleted !');
        return redirect()->route('workflows.show', $posts->id);
    }
}
