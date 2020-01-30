<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BBC University - Administration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="body">
        <div class="loginbox">
            <img src="avatar.png" class="avatar" alt="" srcset="">
            <h1>BBC Administration</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <p>Email</p>
                <input type="text" name="" id="" placeholder="Enter email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <p>Password</p>
                <input type="password" name="" id="" placeholder="Enter password">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>