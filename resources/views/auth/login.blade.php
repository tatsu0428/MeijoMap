<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>User Login</title>
    </head>
    <body>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            <!-- Email Address -->
            <div class="email">
                <h2>Email</h2>
                <input type="email" name="email" placeholder="Eメールアドレス">
            </div>
            
            <!-- Password -->
            <div class="password">
                <h2>Password</h2>
                <input type="password" name="password" placeholder="パスワード" >
            </div>
            
            <!-- Remember Me -->
            <div class="remember_me">
                <h2>Remember me</h2>
                <input type="checkbox" name="remember">
            </div>
            
            <!-- Log in -->
            <div class="login">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
                
                <input type="submit" value="Log in" />
            </div>
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>