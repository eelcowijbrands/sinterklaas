<!DOCTYPE html>

<html>

<head>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{ ('/css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
  <link href="{{ ('/css/main.css') }}" media="all" rel="stylesheet" type="text/css" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
   
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">Sinterklaas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="/kleurplaat">Kleurplaat</a>
        <a class="nav-item nav-link" href="/over-sint">Over Sint</a>
        <a class="nav-item nav-link" href="/contact-sint">Mail de Sint</a>
      </div>
    </div>
</nav>


@yield('content')

<script>
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
</script>

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>