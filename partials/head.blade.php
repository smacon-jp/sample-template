<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}"/>
<title>@yield('title', '予約倶楽部 （Basic）')</title>
@include('main.partials.styles')
@yield('page_css')
