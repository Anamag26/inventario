<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/pages/auth.css')}}">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">

                        <h1 class="auth-title"href="index.html">Inventario Benavente</h1>
                    
                    <h1 class="auth-subtitle">Sign Up</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <form method="POST" action="{{ route('register') }}" class="user2">
                        @csrf

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Nome') }}" placeholder="Nome" required autocomplete="name" autofocus>
                           
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"value="{{ old('Password') }}" placeholder="Password" required autocomplete="new-password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password confirm" required autocomplete="new-password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>

                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}"class="font-bold">Login</a>.</p>
                    </div>
                    
                       
                   
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>