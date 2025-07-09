<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Work & Finance Plan</title>
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="form-page full-landscape">

<div class="sidebar">
  <h3>Menu</h3>
  <ul>
    <li>
      <a href="{{ route('input_form') }}" class="active">
        Input Form
      </a>
    </li>
    <li>
      <a href="{{ route('work_financial_plan') }}">
        Work & Financial Plan
      </a>
    </li>
    <li>
        <a href="{{ route('logout') }}" class="btnLogout sidebar-link-logout">Logout</a>
    </li>
  </ul>
</div>


  <header>
    <h2 class="Logo">
      <img src="{{ asset('images/logo_dts.png') }}" alt="DTS Logo" class="logo-img" />
      Extension Cluster
    </h2>
  </header>

  <form id="myForm" class="form-container-landscape">
    <h2>Work & Finance Plan</h2>

    <div class="form-row-landscape">
      <div class="form-group">
        <input type="text" id="programs" name="programs" required />
        <label for="programs">Programs/Projects/Activities</label>
      </div>
      <div class="form-group">
        <input type="text" id="performance" name="performance" required />
        <label for="performance">Performance Indicators</label>
      </div>
      <div class="form-group">
        <input type="text" id="participants" name="participants" required />
        <label for="participants">Participants</label>
      </div>
    </div>

    <fieldset>
      <legend>Physical Target</legend>
      <div class="form-row-landscape">
        @foreach(['q1', 'q2', 'q3', 'q4', 'total'] as $quarter)
        <div class="form-group">
          <input type="number" id="pt_{{ $quarter }}" name="pt_{{ $quarter }}" required />
          <label for="pt_{{ $quarter }}">{{ strtoupper($quarter) }}</label>
        </div>
        @endforeach
      </div>
    </fieldset>

    <fieldset>
      <legend>Financial Requirement</legend>
      <div class="form-row-landscape">
        @foreach(['q1', 'q2', 'q3', 'q4', 'total'] as $quarter)
        <div class="form-group">
          <input type="number" id="fr_{{ $quarter }}" name="fr_{{ $quarter }}" required />
          <label for="fr_{{ $quarter }}">{{ strtoupper($quarter) }}</label>
        </div>
        @endforeach
      </div>
    </fieldset>

    <div class="form-row-landscape">
      <div class="form-group">
        <input type="text" id="fund" name="fund" required />
        <label for="fund">Fund Source</label>
      </div>
      <div class="form-group">
        <input type="text" id="remarks" name="remarks" required />
        <label for="remarks">Remarks</label>
      </div>
    </div>

    <div class="form-buttons">
      <button class="btn-save" type="button" onclick="saveData()">Save</button>
      <button class="btn-clear" type="reset">Clear</button>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/input_form.js') }}"></script>

</body>
</html>
