<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>User Registration</title>
    </head>
    <body>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            
            <!-- Name -->
            <div class="name">
                <h2>Name</h2>
                <input type="text" name="name" placeholder="名前"/>
            </div>
            
            <!-- Email Address -->
            <div class="email">
                <h2>Email</h2>
                <input type="email" name="email" placeholder="Eメールアドレス">
            </div>
            
            <!-- Role -->
            <div class="role_id">
                <h2>Role</h2>
                <select name="role_id">
                    @foreach($roles as $role)
                        <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Password -->
            <div class="password">
                <h2>Password</h2>
                <input type="password" name="password" placeholder="パスワード" >
            </div>
            
            <!-- Confirm Password -->
            <div class="password_confirmation">
                <h2>Confirm Password</h2>
                <input type="password" name="password_confirmation" placeholder="パスワードの確認" >
            </div>
            
            <a href="{{ route('login') }}">Already registered?</a>
            
            <input type="submit" value="Register" />
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>