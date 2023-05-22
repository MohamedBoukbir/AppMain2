<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
     
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
        <script src="{{ asset('js/app.js') }}" defer></script>
 <style>

     body{

        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
     }
 </style>

</head>
<body>

    <div class="chat_container">

        {{-- <div class="chat_list_container">

            @livewire('chat.chat-list')

        </div> --}}
        <div class="chat_box_container">

        {{-- //////////////////////////////////////////////////////////chat box ////////////////////////////// --}}
        {{-- @if ($selectedConversation) --}}
        <div class="chatbox_header">

            <div class="return">
              <a href="{{route('index')}} "><i class="bi bi-arrow-left"></i></a>  
            </div>

            <div class="img_container">
                <img src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}" alt="">

            </div>


            <div class="name">
                {{ $receiverInstance->name }}
            </div>


            <div class="info">

                <div class="info_item">
                    <i class="bi bi-telephone-fill"></i>
                </div>

                <div class="info_item">
                    <i class="bi bi-image"></i>
                </div>

                <div class="info_item">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
            </div>
        </div>

        <div class="chatbox_body">
            @if ($messages)
            @foreach ($messages as $message)
            <div class="msg_body  {{ auth()->id() == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver' }}"
                style="width:80%;max-width:80%;max-width:max-content">
                
                {{ $message->body }}
                <div class="msg_body_footer">
                    <div class="date">
                        {{ $message->created_at->format('m: i a') }}
                    </div>

                    <div class="read">
                        @php
                         
                         
                      if($message->user->id === auth()->id()){

            
                                if($message->read == 0){


                                    echo'<i class="bi bi-check2 status_tick "></i> ';
                                }
                                else {
                                    echo'<i class="bi bi-check2-all text-primary  "></i> ';
                                }

                      }


                        @endphp
                  

                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>


        <script>
            $(".chatbox_body").on('scroll', function() {
                // alert('aahsd');
                var top = $('.chatbox_body').scrollTop();
                //   alert('aasd');
                if (top == 0) {

                    window.livewire.emit('loadmore');
                }

            });
        </script>


        <script>
            window.addEventListener('updatedHeight', event => {

                let old = event.detail.height;
                let newHeight = $('.chatbox_body')[0].scrollHeight;

                let height = $('.chatbox_body').scrollTop(newHeight - old);


                window.livewire.emit('updateHeight', {
                    height: height,
                });


            });
        </script>
    {{-- @else
        <div class="fs-4 text-center text-primary mt-5">
            no conversasion selected
        </div>




    @endif --}}


 <script>
        window.addEventListener('rowChatToBottom', event => {

            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);

        });
</script>


<script>
    $(document).on('click','.return',function(){


   window.livewire.emit('resetComponent');

    });
</script>
 
<script>

   window.addEventListener('markMessageAsRead',event=>{
 var value= document.querySelectorAll('.status_tick');

 value.array.forEach(element, index => {
     

    element.classList.remove('bi bi-check2');
    element.classList.add('bi bi-check2-all','text-primary');
 });

  });

</script>


        {{-- ////////////////////////////////////////////////////////// end chat box ////////////////////////////// --}}
        <form method="POST" action=" {{route('users.sendmessage', ['receiverInstance' => $receiverInstance->id, 'conversation' => $conversation->id] )}}">
            @csrf
            <div class="chatbox_footer">
            <div class="custom_form_group">
                <input name='body' type="text"  class="control" placeholder="Write message">
                @error('body')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <button type="submit" class="submit">Send</button>
            </div>
        
            </div>
        </form>

        </div>
    </div>





















{{-- user Auth:
{{Auth::user()->name}} --}}
{{-- //////////////////////////////////////////////////////////////
<br><br> <br><br> <br><br>
    Autre user <br>
    {{$receiverInstance->name}} --}}
   
{{-- //////////////////////////////////////////////////////////
    <br><br> <br><br> <br><br>
Messages: --}}
{{-- <br> --}}
{{-- @foreach ($messages as $message) --}}
{{-- <li class="list-group-item list-group-item-action"> {{$user->name}}</li> --}}
{{-- <a   href="{{ route('sendeto', $user->id) }}">{{$user->name}}</a> --}}
{{-- {{$message->body}}
<br>
@endforeach --}}

{{-- <form method="POST" action="{{route('users.sendmessage', ['receiverInstance' => $receiverInstance->id, 'conversation' => $conversation->id] )}} " enctype="multipart/form-data">
    @csrf
    <input type="text" name="body"/>
    @error('body')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary ml-3"> send</button>
</form> --}}
</body>
</html>