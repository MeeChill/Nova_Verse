<link rel="stylesheet" href="{{asset('regis.css')}}">

<div class="wrapper regis">

<form action="{{ url('/register') }}" method="post">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
    <div class="input-box">
        <span class="icon">
            <ion-icon name="person"></ion-icon>
        </span>
        <input type="text" id="name" name="name" required>
        <label>Username</label>
    </div>

    <div class="input-box">
        <span class="icon">
            <ion-icon name="mail"></ion-icon>
        </span>
        <input type="email" id="email" name="email" required>
        <label>Email</label>
    </div>

    <div class="input-box">
        <span class="icon">
            <ion-icon name="lock-closed"></ion-icon>
        </span>
        <input type="password" id="password" name="password" required>
        <label>Password</label>
    </div>

    <button type="submit" class="btn">Register</button>
    <div class="login-register">
        <p>Already have an account? <a href="{{ url('/login') }}" class="login-link">Login</a></p>
    </div>
</form>

</div>
