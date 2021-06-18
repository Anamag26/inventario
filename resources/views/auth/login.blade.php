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
                    
                    <h1 class="auth-subtitle">{{ __('Login') }}</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form method="POST" action="{{ route('login') }}" class="user2">
                        @csrf

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>

                    </form>
                    
                    <div class="text-center">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="text-center">
                        @if (Route::has('register'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Create an Account!') }}
                            </a>
                        @endif
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