<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Reset Password | Extension Cluster</title>
</head>
<body class="login-page reset-page">

  <div class="wrapper">
    <div class="login_box">
      <div class="login-header"><span>Reset Password</span></div>

      {{-- Error Message --}}
      @if ($errors->any())
        <div class="error-message" style="color: #ff6b6b; text-align: center; margin-top: 15px;">
          {{ $errors->first() }}
        </div>
      @endif

      {{-- Reset Form --}}
      <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ request()->email }}">

        <!-- New Password Field -->
        <div class="input_box">
          <input type="password" name="password" id="password" class="input-field" required />
          <label for="password" class="label">New Password</label>
          <i class="bx bx-lock icon"></i>
        </div>

        <!-- Confirm Password Field -->
        <div class="input_box">
          <input type="password" name="password_confirmation" id="password_confirmation" class="input-field" required />
          <label for="password_confirmation" class="label">Confirm Password</label>
          <i class="bx bx-lock icon"></i>
        </div>

        <div class="input_box">
          <input type="submit" class="input-submit" value="Reset Password" />
        </div>

        <div class="register">
          <a href="{{ route('login') }}">← Back to login</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
