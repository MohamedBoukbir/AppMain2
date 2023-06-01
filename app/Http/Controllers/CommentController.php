<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
   public function indexComment(){
    $comments=DB::table('users')
                ->join('comments', 'users.id', '=', 'comments.user_id')
                ->select('users.image','users.username', 'comments.*')
                ->orderby('created_at','desc')->get();
     return view('front.comment',compact('comments'));
   }
   public function comments(Request $request){
    if($request->comment_body){
      $comments= new Comment();
      $comments->comment_body=$request->comment_body;
      $comments->user_id= auth()->user()->id;
      $comments->save();
    }
    return back();
   }
}
