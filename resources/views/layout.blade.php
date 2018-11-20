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