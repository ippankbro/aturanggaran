<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



  <!-- Custom styles for this template -->
  <link href="assets/dashboard.css" rel="stylesheet">

  <title>{{$title}}</title>
</head>

<body>

  <!-- header here -->
  @yield('header')
  <!-- Header here  -->

  <div class="container-fluid">
    <div class="row">
      <!-- Nav Here -->
      @yield('nav')
      
      <!-- Nav end -->
      <!-- Main here -->
      @yield('container')
      <!-- Main end -->
      
    </div>
  </div>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>

  <script src="assets/dashboard.js"></script>
  <script src="assets/script.js"></script>
</body>

</html>