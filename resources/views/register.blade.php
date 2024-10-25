<link rel="stylesheet" href="{{asset('css/regis.css')}}">
<nav>
    <a href="#"><img src="{{asset("Logo.png")}}" alt="logo"></a>
</nav>
<div class="form-wrapper">
    <h2>Regist</h2>
    <form action="{{url('register')}}" method="POST">
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
            <div class="form-control">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" id="name" name="name" value="" required>
                <label>Username</label>
            </div>
            <div class="form-control">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" id="email" name="email" required>
                <label>Email</label>

            </div>
            <div class="form-control">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" id="password" name="password" required>
                <label>Password</label>
                </div>

            <button type="submit">Sign up</button>
            <div class="form-help">
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me"></label>
                    <a href="#">remember me</a>
                </div>

            </div>
        </form>
        <p>You have a account? <a href="{{url('/login')}}">Login</a></p>
