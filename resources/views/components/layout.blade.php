<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('/img/icono.png') }}">
  <title> {{ $title ?? 'FastSales'}}</title>

  @livewireStyles

  @vite(['resources/css/app.css'])

  {{ $style ?? ''}}

</head>
<body>
  <x-navbar />
   {{$slot}} {{-- content o body x_layout--}}
  <x-footer />
  @livewireScripts
  @vite(['resources/js/app.js'])
  {{$script ?? ''}}
</body>
</html>