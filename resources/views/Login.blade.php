<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CAFETRACKER</title>
    <link rel="stylesheet" href="{{('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color:gray;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: rgb(172, 168, 168);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: white;
        }
        .form-label {
            color:  #ffffff;
        }
        /* .btn-google {
            background-color: #7aa3e6;
            color: white;
            margin-bottom: 15px;
        } */
        .btn-login {
            background-color: gray;
            color: white;
        }
        .btn-login:hover {
            background-color: gray;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #dc0606;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @if (Session::has('StatsusLogin'))
    <b>{{Session::get('StatusLogin')}}</b>
    @endif
    <form action="/authentication" method="post">
    @csrf
    <div class="login-container">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="login-container">
        <h3 class="login-title">CAFETRACKER</h3>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email / No Handphone</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email or phone number">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-login w-100">
                <a href="/admin/cafe" class="btn btn-login-choice" >LOGIN ADMIN</a></button>
            <button type="submit" class="btn btn-login w-100">
                 <a href="/home" class="btn btn-login-choice">LOGIN USER</a></button>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>
</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
