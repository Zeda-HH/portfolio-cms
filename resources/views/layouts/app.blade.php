<!DOCTYPE html>
<html>
<head>
    <title>Portfolio CMS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    @include('layouts.navigation')

    @yield('content')

    <footer class="bg-white text-center py-6 mt-16 shadow-inner">
        <p class="text-gray-500">
            © {{ date('Y') }} Zemen CMS. Built with Laravel 🚀
        </p>
    </footer>
</body>
</html>