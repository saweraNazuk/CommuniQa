<?php

namespace App\Http\Controllers;

use App\Models\ForumCategories;
use App\Models\ForumPosts;
use App\Models\UserFriend;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class UserfriendController extends Controller
{
    public function sendrequest($id)
    {
        // echo $id;
        $user_id = auth()->user()->id;
        $friend_id = $id;
        $friend = new UserFriend();
        $friend ->user_id = $user_id;
        $friend->friend_id = $friend_id;
        $friend->save();
        

        // return response()->json(['message' => 'Friend request sent!']);
        return back()->with('message','You have send friend request!');

      
}

public function deleterequest($id)
    {
        $delete = DB::table('user_friends')->where('friend_id',$id)->delete();
        return back()->with('delmessage','You have remove friend request!');
           
    
    
    }
  public function  myfriends()
  {
    $forum = ForumPosts::paginate(2);
    $user = Auth::user();
    $recentPosts = ForumCategories::orderBy('created_at', 'desc')->take(10)->get();
    $users = User::where('id', '!=', auth()->user()->id)->get();
    $forumposts = ForumPosts::where('author_id',$user->id)->get();
    return view('partials.myfriends', compact('forumposts','forum','recentPosts','users'));
  }


}