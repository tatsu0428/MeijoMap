<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Users</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Users</h1>
        <div class='users'>
            @foreach ($users as $user)
                <div class='user'>
                    <p class='name'>{{ $user->name }}</p>
                    <p class='role_id'>{{ $user->role_id }}</p>
                    <p class='email'>{{ $user->email }}</p>
                    <p class='password'>{{ $user->password }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>