<!DOCTYPE html>
<html lang="Ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}"/>
    @include('main.layout.style')
    @stack('styles')
</head>
<body>
    @include('main.layout.header')
  

    <div class="contain" style="min-height: 600px;">
      @yield('content')
    </div>

    @include('main.layout.footer')
    @include('main.layout.scripts')

    @stack('scripts')
</body>
</html>
