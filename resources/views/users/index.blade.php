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
            <table border="1">
                <tr>
                    <th>名前</th>
                    <th>役割ID</th>
                    <th>Eメールアドレス</th>
                    <th>パスワード</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>