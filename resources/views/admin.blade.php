<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    admin
    {{-- @foreach ($candidats as $candidat)
    <table>
        <thead>
        <tr> 
            <td> name </td>
            <td> mail </td>
        </tr>
        </thead>
        <tbody>
            <tr> 
                <td> {{$candidat->name}} </td>
                <td> {{$candidat->email}}  </td>
            </tr>

        </tbody>
    </table>
    @endforeach --}}
    <a href="{{route('candidat')}}">to user</a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        {{-- <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link> --}}
        <button type="submit"> Logout</button>
    </form>
</body>
</html>