<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Forgot Password | Extension Cluster</title>

  <style>
    body.login-page {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        position: relative;
        background-image: url("../images/login-logo.png"); /* Adjust your path */
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Poppins', sans-serif;
    }

    .wrapper {
      width: 120%;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 120vh;
      background-color: rgba(0, 0, 0, 0.2);
    }

    .login_box {
      position: relative;
      width: 350px;
      backdrop-filter: blur(15px);
      border: 2px solid #90C67C;
      border-radius: 15px;
      padding: 7.5em 2.5em 4em 2.5em;
      color: #fff;
      box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.3);
      background: rgba(0, 0, 0, 0.25);
    }

    .login-header {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #90C67C;
      width: 220px;
      height: 70px;
      border-radius: 0 0 20px 20px;
    }

    .login-header span {
        font-size: 30px;
        color: white;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
        text-align: center; /* optional, ensures text inside the span aligns */
    }
 
    .input_box {
      position: relative;
      display: flex;
      flex-direction: column;
      margin: 20px 0;
    }

    .input-field {
      width: 100%;
      height: 55px;
      font-size: 16px;
      background: transparent;
      color: white;
      padding: 0px;
      border: 2px solid #90C67C;
      border-radius: 30px;
      outline: none;
    }

    .label {
      position: absolute;
      top: 15px;
      left: 20px;
      transition: 0.2s;
      pointer-events: none;
      color: #aaa;
    }

    .input-field:focus ~ .label,
    .input-field:valid ~ .label {
      top: -10px;
      font-size: 14px;
      background-color: #90C67C;
      border-radius: 30px;
      color: black;
      padding: 0 10px;
    }

    .icon {
      position: absolute;
      top: 18px;
      right: 25px;
      font-size: 20px;
      color: #90C67C;
      pointer-events: none;
    }

    .input-submit {
      width: 100%;
      height: 50px;
      background: #90C67C;
      font-size: 16px;
      font-weight: 500;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: 0.3s;
      color: white;
    }

    .input-submit:hover {
      background: transparent;
      border: 2px solid #90C67C;
      color: #90C67C;
    }

    .message {
      color: lightgreen;
      text-align: center;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .error-message {
      color: #ff6b6b;
      text-align: center;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .register {
      text-align: center;
      margin-top: 15px;
    }

    .register a {
      color: #90C67C;
      text-decoration: none;
      font-weight: 500;
    }
  </style>
</head>

<body class="login-page">
  <div class="wrapper">
    <div class="login_box">
      <div class="login-header"><span>Forgot Password</span></div>

      @if (session('status'))
        <div class="message">{{ session('status') }}</div>
      @endif

      @if ($errors->any())
        <div class="error-message">{{ $errors->first() }}</div>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="input_box">
          <input type="email" name="email" class="input-field" required />
          <label for="email" class="label">Enter your email</label>
          <i class="bx bx-envelope icon"></i>
        </div>

        <div class="input_box">
          <input type="submit" class="input-submit" value="Send Reset Link" />
        </div>

        <div class="register">
          <a href="{{ route('login') }}">← Back to login</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
