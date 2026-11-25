
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Fonte Culture | Portal</title>

  <meta
    name="description"
    content="Fonte Culture — Origin, Knowledge, Culture, Future."
  >

  <meta name="theme-color" content="#082D4B">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Marcellus&family=Source+Sans+3:wght@400;500;600&display=swap"
    rel="stylesheet"
  >

  <!-- Stylesheet -->
  <link rel="stylesheet" href="{{ asset('fonte/style.css') }}">
</head>

<body>

  <!-- INTRODUCTORY ANIMATION -->
  <div class="intro-screen" id="introScreen" aria-label="Fonte Culture introduction">

    <div class="intro-lockup">

      <div class="intro-emblem">
        <img
          src="{{ asset('fonte/assets/FC_just_logo.svg') }}"
          alt=""
          aria-hidden="true"
        >
      </div>

      <div class="intro-wordmark">
        FONTE CULTURE
      </div>

      <div class="intro-sequence">
        <span>ORIGIN</span>
        <span class="sequence-dot">·</span>
        <span>KNOWLEDGE</span>
        <span class="sequence-dot">·</span>
        <span>CULTURE</span>
        <span class="sequence-dot">·</span>
        <span>FUTURE</span>
      </div>

    </div>

  </div>


  <!-- FINAL PORTAL SCREEN -->
  <main class="portal-screen" id="portalScreen">

    <!-- TOP RIGHT AUTHENTICATION BUTTONS -->
    <nav class="auth-navigation" aria-label="Account access">

      <a class="auth-button login-button" href="{{ route('reports.public') }}"> Reports
      </a>

      <a class="auth-button register-button" href="/register/">
        Register
      </a>

    </nav>


    <!-- CENTRAL BRAND IDENTITY -->
    <section class="portal-brand" aria-label="Fonte Culture">

      <img
        class="portal-logo"
        src="{{ asset('fonte/assets/FC_just_logo.png') }}"
        alt="Fonte Culture"
      >

      <div class="portal-sequence">
        <span>ORIGIN</span>
        <span class="sequence-dot">·</span>
        <span>KNOWLEDGE</span>
        <span class="sequence-dot">·</span>
        <span>CULTURE</span>
        <span class="sequence-dot">·</span>
        <span>FUTURE</span>
      </div>

    </section>

  </main>


  <!-- JavaScript -->
  <script src="{{ asset('fonte/home.js') }}"></script>

</body>
</html>

