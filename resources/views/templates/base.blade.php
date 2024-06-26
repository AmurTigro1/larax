<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Base</title>
</head>
<body>
    <div class="w-auto mx-auto">
        <header class="bg-blue-700 text-white flex items-center justify-between px-4 py-3">
            <div class="text-xl font-bold" id="brand">
                HTMX Project
            </div>
            <nav class="flex space-x-4" id="main-nav">
                <a href="/" class="p-3 hover:bg-blue-600 rounded-md transition">Home</a>
                <a href="/about" class="p-3 hover:bg-blue-600 rounded-md transition">About</a>
                <a href="/products" class="p-3 hover:bg-blue-600 rounded-md transition">Products</a>
                <a href="/contact" class="p-3 hover:bg-blue-600 rounded-md transition">Contact Us</a>
            </nav>
        </header>
        
        <article id="content" class="min-h-[35rem] bg-gray-100 py-8">
            @yield('content')
        </article>
        
        <footer class="text-center text-gray-500 py-3 bg-gray-200 mt-8">
            &copy; 2024. All rights reserved.
        </footer>
    </div>
</body>
</html>
