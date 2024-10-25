<link rel="stylesheet" href="{{asset('css/style.css')}}">

<nav>
    <a href="#"><img src="{{asset('Logo.png')}}" alt="logo"></a>
</nav>
<div class="form-wrapper">
    <h2>Login</h2>
    <form action="{{url('/login')}}" method="POST">
        @csrf
        <div class="form-control">
            <span class="icon">
                <ion-icon name="mail"></ion-icon>
            </span>
            <input type="text" id="name" name="name" value="" required>
            <label>Username</label>
        </div>
        <div class="form-control">
            <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" id="password" name="password" required>
            <label>Password</label>
            </div>
        <button type="submit">Sign In</button>
        <div class="form-help">
            <div class="remember-me">
                <input type="checkbox" id="remember-me">
                <label for="remember-me"></label>
                <a href="#">Forgot password?</a>
            </div>

        </div>
        <div class="login-register">
            <p>Don't have an account?<a href="{{url('/register')}}" class="register-link">Register</a></p>
        </div>
    </form>
</div>
