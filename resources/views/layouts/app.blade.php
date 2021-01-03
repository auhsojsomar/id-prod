<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome-5-pro/css/pro.min.css') }}">
  <title>@yield('title')</title>
</head>

<body class="bg-gray-100">
  <div class="flex">
    @include('includes.sidebar')
    <div class="flex flex-col flex-grow">
      @include('includes.header')
      @yield('content')
    </div>
  </div>
</body>

</html>
