<link rel="stylesheet" href="{{asset('style.css')}}">

<div class="wrapper regis">

<form action="{{ url('/login') }}" method="post">
    @csrf
    <div class="input-box">
        <span class="icon">
            <ion-icon name="mail"></ion-icon>
        </span>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        <label>Username</label>
    </div>

    <div class="input-box">
        <span class="icon">
            <ion-icon name="lock-closed"></ion-icon>
        </span>
        <input type="password" id="password" name="password" required>
        <label>Password</label>
    </div>
    <div class="remember-forgot">
        <label><input type="checkbox"> Remember me</label>
        <a href="#">Forgot Password?</a>
    </div>
    <button type="submit" class="btn">Login</button>
    <div class="login-register">
        <p>Don't have an account?<a href="{{url('/register')}}" class="register-link">Register</a></p>
    </div>
</form>

</div>
