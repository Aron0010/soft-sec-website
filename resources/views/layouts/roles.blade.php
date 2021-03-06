<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link integrity="{{ Sri::hash('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}"
    rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  @livewireStyles

  <!-- Scripts -->
  <script integrity="{{ Sri::hash('js/app.js') }}" src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @livewire('navigation-dropdown')

    <!-- Page Heading -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Roles
        </h2>
      </div>
    </header>

    <!-- Page Content -->
    <main>
      @yield('content')

    </main>

  </div>

  @stack('modals')

  @livewireScripts
</body>

</html>
