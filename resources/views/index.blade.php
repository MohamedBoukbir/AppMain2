<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<body>
    welcom eto users  
<br>
@foreach ($users as $user)
{{-- <li class="list-group-item list-group-item-action"> {{$user->name}}</li> --}}
<a   href="{{ route('sendeto', $user->id) }}">{{$user->username}} </a>
    @php
        $existe = false;
    @endphp
    @foreach ($likeds as $liked) 
      {{-- {{ $liked->id_famille}} --}}
        @if ($liked->id_famille == Auth::user()->id) 
                @php
                $existe = true;
                break;
                @endphp
        @else
            @php
            $existe = false;
            break;
            @endphp
        @endif

    @endforeach

    @if($existe == true)
        <a href="{{ route('liked', ['id_candidat' => $user->id]) }}"><i class="bi bi-heart-fill text-danger"></i></a>
    @else
        <a href="{{ route('liked', ['id_candidat' => $user->id]) }}"><i class="bi bi-heart-fill"></i></a>
    @endif
 <br>
@endforeach
/////////////////
<a href="{{route('famille.index')}}"> router </a>
</body>
</html>