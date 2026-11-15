<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Profile Picture Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('profile_icon.jpg') }}">

    <!-- Tailwind CSS (CDN for easy setup) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans">

    <!-- Page Content Section -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100 py-6 text-center text-sm text-gray-500">
        <p>&copy; {{ date('Y') }} My Portfolio. Built with Laravel & Laragon.</p>
    </footer>

</body>
</html>