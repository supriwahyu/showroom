<!doctype html>
<html lang="en">

<head>
  @include('style')
  @yield('style')
  <style>
    body {
   min-height: 400px;
}
  </style>
  <title>@yield('title')</title>
</head>

<body class="bg-light">
  @include('header')
  <br>
  @yield('content')
  <br>
  @include('footer')
  @include('script')
  @yield('script')
  <script type="text/javascript">
  </script>
</body>
</html>