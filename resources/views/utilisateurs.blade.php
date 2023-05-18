<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($candidats as $candidat)
    <table>
        <thead>
        <tr> 
            <td> name </td>
            <td> mail </td>
        </tr>
        </thead>
        <tbody>
            <tr> 
                <td> {{$candidat->username}} </td>
                <td> {{$candidat->email}}  </td>
            </tr>

        </tbody>
    </table>
    @endforeach

    @role('admin')
    <p>This is visible to users with the admin role. Gets translated to </p>
    @endrole
 

</body>
</html>