<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
            <form method="POST" action="{{route('comment')}}">
                @csrf
                <textarea type="text" name="comment_body"  placeholder="comments here"> </textarea>
                <button type="submit" >Send</button>
                <br>
                @foreach($comments as $comment)
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    {{-- <p>{{$comment->comment_body}}</p> --}}
                    
                    <div class="d-flex align-items-center">
                        @if($comment->image)
                        <img class="img-fluid flex-shrink-0 rounded" src="/storage/images/{{ $comment->image }}"
                            style="width: 50px; height: 50px;">
                        @else
                        <img class="img-fluid flex-shrink-0 rounded"   src="https://ui-avatars.com/api/?name={{ urlencode($comment->username) }}"
                            style="width: 50px; height: 50px;">
                      
                        @endif
                        <div class="ps-3">
                            <h5 class="mb-1">{{$comment->username}}</h5>
                            <small>{{$comment->comment_body}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </form>
   
</body>
</html>