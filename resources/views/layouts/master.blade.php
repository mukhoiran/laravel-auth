<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/main.js" type="text/javascript"></script>
  </head>
  <body>

    <header>
      <nav>
        <a href="/blog">Home</a>
        <a href="/blog">Blog</a>
      </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <footer>
      <p>
        &copy; laravel & mukhoiran 2019
      </p>
    </footer>

  </body>
</html>
