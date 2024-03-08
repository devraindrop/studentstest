<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Student App')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
    <header class="bg-blue-500 text-white p-4">
        <!-- Your header content goes here -->
        <h1 class="text-2xl font-bold">Student App Header</h1>
        <nav>
            <!-- Your navigation menu goes here -->
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    @if(session('success'))
        <div class="bg-green-200 border-green-600 text-green-800 border-l-4 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow">
        @yield('content')
    </div>

    <footer class="bg-gray-300 text-gray-700 p-4">
        <!-- Your footer content goes here -->
        <p>&copy; 2022 Student App. All rights reserved.</p>
    </footer>

</body>

</html>

