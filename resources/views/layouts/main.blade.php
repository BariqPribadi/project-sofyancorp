<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-500">
    @include('layouts.navbar')
    <div class="p-12">
        @yield('container')
        @if(session('success'))
          <div class="mt-5 p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            {{ session('success') }}
          </div>
        @endif
    </div>
</body>
</html>