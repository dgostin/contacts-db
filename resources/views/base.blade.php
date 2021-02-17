<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts Database</title>
  <!-- link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" / -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <style>

.vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}


    </style>


</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <!-- script src="{{ asset('js/app.js') }}" type="text/js"></script -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" type="text/js"></script>
</body>
</html>