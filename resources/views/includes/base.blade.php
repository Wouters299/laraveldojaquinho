<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>
    <link rel='styleheet' href="{{asset('/css/style.css')}}">
</head>
<body>
    <h1> site lindão do e-commerce</h1>
    <div>
  <ul>
      <li> <a href="{{'welcome'}}"> home</a></li>
      <li> <a href="{{'produtos'}}"> produtos</a></li>
  </ul>
    </div>

    @yield('content') <br>
    @yield('content2') <br>
    @yield('content3')

</body>
</html>
