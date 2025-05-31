<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BeautyAtmosphera</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <link rel="stylesheet" href="https://geowidget.inpost.pl/inpost-geowidget.css"/>


  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles


</head>

<body class=" text-[#1b1b18] flex  min-h-screen flex-col relative">
  <livewire:navigation />
  
  @yield('content')
  
  <livewire:footer />
  <livewire:button-up />
  
  @livewireScripts
</body>

</html>