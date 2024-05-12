<?php

namespace App\Http\Controllers;


use App\Models\ChFavorite;
use App\Models\ForumCategories;
use App\Models\ForumPosts;
use App\Models\User;
use Chatify\Facades\ChatifyMessenger;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Carbon\Carbon;


use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function view_blog(Request $request){
        return view('partials.blog',
        ['posts'=> Post::take(3)->get(),
        'featuredpost'=>Post::published()->featured()->take(9)->get(),
        ]
    
    );
     }

     

     public function dashboard(){
      
        $forumposts = ForumPosts::paginate(3);
        $recentPosts = ForumCategories::orderBy('created_at', 'desc')->take(10)->get();
        $shareComponent = \Share::page('https://your-url.com', 'Your share text')
           
            ->facebook()
            ->linkedin()
            ->whatsapp()
          ;
          $users = User::where('id', '!=', auth()->user()->id)->get();
          $FavChats = ChFavorite::orderBy('created_at', 'desc')->take(10)->get();
        //   $searuser = DB::table('users')->where('name', 'like', '%'.$search.'%')->get();
        // $recentchats=DB::table('ch_favorites')->where
        // ( 'user_id', auth()->user()->id)->pluck('favorite_id');
        // $recentchats = ChatifyMessenger::lastmessage(Auth::user()->id);
        return view('dashboard',compact('forumposts','recentPosts','shareComponent','users' ,'FavChats'));

     }

     
     public function view_privacy(){
        return view('partials.privacypolicy');
    
   
     }
     public function  view_contact(){
        return view('partials.contactus');
    
   
     }
    
     public function view_about(){
        return view('partials.aboutus');
    
   
     }

public function search_data(Request $request)
{
$search_text= $request->input('query');
$featuredpost = DB::table('posts')->where('title', 'like', '%'.$search_text.'%')->get();
return view('partials.blog',compact('featuredpost'));

}
public function search_user(Request $request)
{
$search_text= $request->input('query');

return view('dashboard',compact('users'));

}

// public function search_blog(Request $request)
// {
// $search_txt= Post::query();
// $seach_para= $request->query('q');
// if($seach_para)
// {
//     $post= Post::search('$seach_para');
// }
// $posts = $post->get();
// return view('partials.blog',compact('$posts','$seach_para'));

// }


    //  public function show(Post $post){
       
    //     return view(
    //         'partials.show',
    //         ['show'=>$post]
    //     );

    //  }
//      public function show(Request $request){
//         return view('partials.show',
//         ['posts'=> Post::take(1)->get()]);
    
// }
public function blog_details($id)
    {
     $posts= Post::find($id);
    return view('partials.show',compact('posts'));

    }
    public function myposts()
{
    $forum = ForumPosts::paginate(2);
    $user = Auth::user();
    $recentPosts = ForumCategories::orderBy('created_at', 'desc')->take(10)->get();
    $users = User::where('id', '!=', auth()->user()->id)->get();
    $FavChats = ChFavorite::orderBy('created_at', 'desc')->take(10)->get();
    $forumposts = ForumPosts::where('author_id',$user->id)->get();
    return view('partials.myposts', compact('forumposts','forum','recentPosts','users','FavChats'));
}

}
