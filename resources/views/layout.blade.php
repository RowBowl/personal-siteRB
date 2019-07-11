<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="/css/app.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="/"> Home</a>
        <a class="navbar-item" href="/aboutme"> About</a>
        <a class="navbar-item" href="/contactme"> Contact Me</a>
        <a class="navbar-item" href="/projects"> Projects</a>
      </div>
    </nav>

    @yield('contents')
  </body>
</html>
