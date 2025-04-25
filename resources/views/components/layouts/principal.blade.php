<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo') Emprendedores Creativos &copy; </title>
  @livewireStyles
  <script src="https://kit.fontawesome.com/255bc8dd2c.js" crossorigin="anonymous"></script>
</head>
<body>
  <x-header/>
  <main class="">
    @yield('contenido')
  </main>
  <x-footer/>
  @livewireScripts
</body>
</html>