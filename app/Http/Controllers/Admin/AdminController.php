<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\Tag;
use App\State;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PostCreateRequest;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postss = Post::where('published_at', '<=', Carbon::now())
                 ->orderBy('published_at', 'desc')
                 ->paginate(20);
        $posts= Post::all();

                 return view('admin.pages.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::lists('name','id');
        $stateList= State::lists('name','id');
        return view('admin.pages.compose',compact('tags','stateList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        $post= new Post();
        $post->title =$request->get('title');
        $post->company_name=$request->get('company');
        $date=$request->get('closing');
        //dd(date('Y-m-d', strtotime($date)));
        $post->closing= date('Y-m-d', strtotime($date));
        $post->job_description=$request->get('job_description');
        $post->job_experience=$request->get('job_experience');
        $post->company_description=$request->get('company_description');
        $publish=$request->get('publish');
        $save=$request->get('save');

        if(isset($publish)) {
            $post->active=1;
             $post->save();
            return redirect('admin')
             ->withSuccess("New job has been published");
        } else if(isset($save)) {
             $post->active=0;
             $post->save();
             return redirect('/admin')
             ->withErrors("The post has been saved for publishing later");

        }
        
       // dd(strip_tags($raw));

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
        //
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
    }
}
