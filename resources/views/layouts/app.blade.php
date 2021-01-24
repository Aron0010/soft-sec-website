<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    integrity="{{ Sri::hash('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer>
  </script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @livewire('navigation-dropdown')

    <!-- Page Heading -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>

    <!-- Page Content -->
    <main>
      {{ $slot }}

    </main>

    <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">

      <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
          <div class="sm:w-2/3 text-center py-6">
            <p class="text-sm text-blue-700 font-bold mb-2">
              © <?php echo date("Y"); ?> Copyright.
            </p>
            <a href="{{ route('privacy-note') }}" class="ml-4 text-sm text-gray-700 underline">Privacy Note</a>

          </div>
        </div>
      </div>
    </footer>

  </div>

  @stack('modals')


  @livewireScripts
</body>

</html>
