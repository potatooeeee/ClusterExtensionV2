<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ secure_asset('css/stylesheet.css') }}">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Extension Cluster</title>
</head>
<body class="login-page">
  <header>
    <h2 class="Logo">
      <img src="{{ asset('images/logo_dts.png') }}" alt="DTS Logo" class="logo-img" />
      Extension Cluster
    </h2>
    <button class="btnLogin" id="headerLoginBtn">Login</button>
  </header>

  <div class="wrapper">

    <!-- Login Form -->
    <div class="login_box" id="loginBox">
      <div class="login-header"><span>Login</span></div>
      <form id="loginForm">
        @csrf
        <div class="input_box">
          <input type="email" id="user" name="email" class="input-field" required />
          <label for="user" class="label">Email</label>
          <i class="bx bx-envelope icon"></i>
        </div>
        <div class="input_box">
          <input type="password" id="pass" name="password" class="input-field" required />
          <label for="pass" class="label">Password</label>
          <i class="bx bx-lock icon"></i>
        </div>
        <div class="remember-forgot">
          <div class="remember-me">
            <input type="checkbox" id="remember" />
            <label for="remember">Remember me</label>
          </div>
            <div class="forgot"><a href="{{ route('password.request') }}">Forgot password?</a></div>
        </div>
        <div class="remember-forgot">
          <div class="remember-me">
              <input type="checkbox" id="showLoginPassword" />
            <label for="showLoginPassword">Show password</label>
          </div>
        </div>
        <div class="input_box">
          <input type="submit" class="input-submit" value="Login" />
        </div>
        <div class="register">
          <span>Don't have an account? <a href="#" id="showRegister">Register</a></span>
        </div>
      </form>
    </div>

    <!-- Register Form -->
    <div class="login_box" id="registerBox">
      <div class="login-header"><span>Registration</span></div>
      <form id="registerForm">
        @csrf
        <div class="input_box">
          <input type="text" id="reg_user" name="username" class="input-field" required />
          <label for="reg_user" class="label">Username</label>
          <i class="bx bx-user icon"></i>
        </div>
        <div class="input_box">
          <input type="email" id="reg_email" name="email" class="input-field" required />
          <label for="reg_email" class="label">Email</label>
          <i class="bx bx-envelope icon"></i>
        </div>
        <!-- Password -->
        <div class="input_box">
          <input type="password" id="reg_pass" name="password" class="input-field" required />
          <label for="reg_pass" class="label">Password</label>
          <i class="bx bx-lock icon"></i>
        </div>

        <!-- Confirm Password -->
        <div class="input_box">
          <input type="password" id="reg_confirm_pass" name="password_confirmation" class="input-field" required />
          <label for="reg_confirm_pass" class="label">Confirm Password</label>
          <i class="bx bx-lock icon"></i>
        </div>

        <!-- Show Password Checkbox -->
        <div class="remember-forgot">
          <div class="remember-me">
            <input type="checkbox" id="showPasswordCheckbox" />
            <label for="showPasswordCheckbox">Show password</label>
          </div>
        </div>

        <div class="register">
          <span>Already have an account? <a href="#" id="showLogin">Login</a></span>
        </div>
      </form>
    </div>

  </div>

  <div id="loading">
    <div class="spinner"></div>
    <p class="loading-text">Loading, please wait...</p>
  </div>

  <script src="{{ secure_asset('js/script.js') }}"></script>
</body>
</html>
