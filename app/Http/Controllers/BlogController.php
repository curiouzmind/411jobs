<?php

namespace App\Http\Controllers;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
 	{
		 $posts = Post::where('published_at', '<=', Carbon::now())
				 ->orderBy('published_at', 'desc')
				 ->paginate(config('blog.posts_per_page'));
				 return view('pages.index', compact('posts'));
	 }

	 public function showPost($slug)
 	  {
		 $post = Post::whereSlug($slug)->firstOrFail();

			return view('pages.single')->withPost($post);
		
 	}

 	public function compose()
 	{
 		return view('pages.compose');
 	}

 	 public function show()
 	 {
 	 	// Query in FQL
 		 $url='http://todaysgist.blogspot.com.ng/2015/10/shocking-boko-haram-releases-video.html';
      	 $fql  = "SELECT share_count, like_count, commentsbox_count ";
    	 $fql .= " FROM link_stat WHERE url = '$url'";
 
   		 $fqlURL = "https://api.facebook.com/method/fql.query?format=json&query=" . urlencode($fql);
 
   		 // Facebook Response is in JSON
    	$response = file_get_contents($fqlURL);
   // return $response->
    return json_decode($response);
 	 }
}		
