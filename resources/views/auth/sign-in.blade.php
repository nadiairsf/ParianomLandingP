<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/pages/auth.css') }}">
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
            </div>
          

            <form method="POST" action="{{ route('login') }}">
               @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-xl" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-xl" name="password" required autocomplete="current-password" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5 color">Masuk</button>
            </form>
          
        </div>
    </div>
    <!-- <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div> -->
</div>

    </div>
</body>

</html>
