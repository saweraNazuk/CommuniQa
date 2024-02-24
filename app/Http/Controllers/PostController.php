<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view_blog(Request $request){
        return view('partials.blog',
        ['posts'=> Post::take(3)->get(),
'featuredpost'=>Post::published()->featured()->take(9)->get(),
        ]
    
    );
     }
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
}
