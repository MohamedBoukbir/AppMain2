<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    welcom eto users  
<br>
@foreach ($users as $user)
{{-- <li class="list-group-item list-group-item-action"> {{$user->name}}</li> --}}
<a   href="{{ route('sendeto', $user->id) }}">{{$user->username}}</a>
<br>
@endforeach
/////////////////
<a href="{{route('account-dashboard')}}"> router </a>
</body>
</html>