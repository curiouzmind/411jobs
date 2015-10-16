<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\Tag;
use App\State;
use App\Category;
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
        $comp=Post::lists('company_name','company_name');
        $cat =Category::lists('name','name');
        $tags=Tag::lists('name','name');
        $stateList= \DB::table('statess')->lists('name','name');
        return view('admin.pages.compose',compact('comp','stateList','tags','cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        //dd(\Input::all());
        $post= new Post();
        $post->title =$request->get('title');
        $post->company_name=$request->get('company');
        $date=$request->get('closing');
        //dd(date('Y-m-d', strtotime($date)));
        $post->closing= date('Y-m-d', strtotime($date));
        $post->job_description=$request->get('job_description');
        $post->job_experience=$request->get('job_experience');
        $post->company_description=$request->get('company_description');
        $post->salary=$request->get('salary');
        $publish=$request->get('publish');
        $save=$request->get('save');
        $state=$request->get('location');
        $cat=$request->get('category');
        $tags=$request->get('tags');
         $tagNames= [];
                 foreach ($tags as $tag) {
                     if( $existingTag = Tag::where('name', $tag)->first()) {
                     $TagNames[]= $existingTag;
                         }
                  else{
                     $newTag = new Tag();
                     $newTag ->name  = $tag;
                     $newTag->save();
                 $TagNames[]=$newTag;
                    }
                 }

        if(isset($publish)) {
            $post->active=1;
             $post->save();
              $post->tags()->saveMany($TagNames);
              $newCat=new Category();
              $newCat->name= $cat;
              $newCat->post_id=$post->id;
              $newCat->save();
            // $post->tags()->sync($tag);
            $sta= new State();
            $sta->name=$state;
            $sta->post_id=$post->id;
            $sta->save();

            return redirect('admin')
             ->withSuccess("New job has been published");
        } else if(isset($save)) {
             $post->active=0;
             $post->save();
              $post->tags()->saveMany($TagNames);
              $newCat=new Category();
              $newCat->name= $cat;
              $newCat->post_id=$post->id;
              $newCat->save();
            // $post->tags()->sync($tag);
            $sta= new State();
            $sta->name=$state;
            $sta->post_id=$post->id;
            $sta->save();

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
