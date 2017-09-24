<!doctype html>
<html lang="en">
<head>
    <title>users</title>
</head>
<body>

    @foreach($users as $user)

        <a href="users/{{$user['id']}}}">
            <img src="{{$user['avatar']}}" alt="{{$user['firstName'] . ' ' . $user['lastName']}}">
            <p>{{$user['firstName']}}</p>
            <p>{{$user['lastName']}}</p>
        </a>
        
    @endforeach

</body>
</html>