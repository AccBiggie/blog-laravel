
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('pageTitle')</title>
    <!-- CSS files -->
    <base href="/">
    <link rel="shortcut icon" href="{{ \App\Models\GeneralSettings::find(1)->blog_favicon }}" type="image/x-icon">
    <link href="./backend/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./backend/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./backend/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./backend/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    @stack('stylesheet')
    @livewireStyles
    <link href="./backend/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
  </head>
  <body  class=" d-flex flex-column">
    @yield('content')
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./backend/dist/js/tabler.min.js?1684106062" defer></script>
    @stack('scripts')
    @livewireScripts
    <script src="./backend/dist/js/demo.min.js?1684106062" defer></script>
  </body>
</html>