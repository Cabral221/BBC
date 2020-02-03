<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBC University - Administration</title>
    <link rel="stylesheet" href="{{ asset('asset_admin/login/style.css') }}">
</head>
<body>
    <div class="body">
        <div class="loginbox">
            <div class="div-avatar">
                <img src="{{ asset('asset_admin/login/avatar.png')}}" class="avatar" alt="" srcset="">
            </div>
            <h1>BBC Administration</h1>
            <form method="POST" action="{{ route('login-admin') }}">
                @csrf
                
                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
                        
                @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
                        
                @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>