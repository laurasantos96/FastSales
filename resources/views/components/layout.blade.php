<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('/img/icono.png') }}">
  <title> {{ $title ?? 'FastSales'}}</title>
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.min.js"></script>
  {{-- <script src="sweetalert2.all.min.js"></script> --}}


 @livewireStyles

  @vite(['resources/css/app.css','resources/css/mi_css.css','resources/js/sweetAlert2.js'])

  {{ $style ?? ''}}

</head>
<body>
  <x-navbar />

  @if (session()->has('message'))
    <x-alert :type="session('message')['type']" :message="session('message')['text']"></x-alert>
   
  @endif

   {{$slot}} {{-- content o body x_layout--}}

   
  <x-footer />
  @livewireScripts
  @vite(['resources/js/app.js'])
  {{$script ?? ''}}
</body>
</html>