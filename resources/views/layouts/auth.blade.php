<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Fonte Culture</title>
  <meta name="theme-color" content="#082D4B">
  <link rel="icon" type="image/png" href="{{ asset('fonte/images/favicon.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('fonte/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fonte/auth.css') }}">
</head>
<body class="auth-page">
  <main class="auth-screen">
    <div class="auth-wrapper">
      <a class="auth-logo" href="{{ url('/') }}">
        <img src="{{ asset('fonte/Assets/FC_just_logo.png') }}" alt="Fonte Culture">
      </a>

      @yield('content')
    </div>
  </main>
</body>
</html>
