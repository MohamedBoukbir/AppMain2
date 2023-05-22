<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;

class CreateUsers extends Controller
{
  public function index(){
  $users=User::where('id', '!=', auth()->user()->id)->get();
  // dd($users);
  // $nadi="rak nadi";
  return view('index',compact('users',$users));
  }


  public function sendetoUser($receiverId){
    // dd($user);


    $receiverInstance= User::find($receiverId);
    $conversation = Conversation::where('receiver_id', auth()->user()->id)->where('sender_id', $receiverId)
                                        ->orWhere('receiver_id', $receiverId)
                                        ->where('sender_id', auth()->user()->id)->first();

//    dd($checkedConversation->id);                              
        if ($conversation) {

        // dd('exist');
       
        $messages_count = Message::where('conversation_id',$conversation->id)->count();
          $messages = Message::where('conversation_id',$conversation->id)
           ->orderBy('created_at','asc')
           ->skip($messages_count - 10)
           ->take(10)->get();
        //    dd(count($messages));
         return  view('chatbox',compact('receiverInstance','messages','conversation'));
       }

     else  {

        $conversation= Conversation::create(['receiver_id'=>$receiverId,'sender_id'=>auth()->user()->id,'last_time_message'=>0]);
        /// conversation created 
  
          $createdMessage= Message::create(['conversation_id'=>$conversation->id,'sender_id'=>auth()->user()->id,'receiver_id'=>$receiverId,'body'=>'Hello 👏']);

          $conversation->last_time_message= $createdMessage->created_at;
          $conversation->save();

          $messages_count = Message::where('conversation_id',$conversation->id)->count();
          $messages = Message::where('conversation_id',$conversation->id)
          ->orderBy('created_at','asc')
           ->skip($messages_count - 10)
           ->take(10)->get();
        return  view('chatbox',compact('receiverInstance','messages','conversation'));
     } 
}

///////////////////////////////send mesage///////////////////

public function sendMessage(Request $request,$receiverInstance,Conversation $conversation)
{
    // if ($request->body == null) {
    //     return null;
    // }
    $request->validate([
        'body' => 'required',
    ]);
    // dd($conversation->id);
    $createdMessage = Message::create([
        'conversation_id' => $conversation->id,
        'sender_id' => auth()->id(),
        'receiver_id' =>$receiverInstance,
        'body' =>$request->body,
    ]);
    $conversation->last_time_message =$createdMessage->created_at;
    $conversation->save();
    return redirect()->back();
}
}
