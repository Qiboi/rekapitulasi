<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css'])

    <title>@yield('title')</title>
</head>
<body class="bg-gray-100 text-gray-900 flex">
    <!-- Sidebar -->
    @include('components.sidebar')

    <div class="flex-1 p-4">
        @yield('container')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>