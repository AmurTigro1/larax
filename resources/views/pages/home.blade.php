@extends('templates.base')

@section('content')
    <div class="container mx-auto py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-green-600">Welcome to Plant Haven</h1>
            <p class="mt-4 text-xl text-gray-700">Your ultimate guide to growing and caring for plants</p>
        </header>
        
        <section class="introduction text-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Discover the Beauty of Plants</h2>
            <p class="mt-4 text-lg text-gray-600">Explore our extensive collection of plant guides, tips, and resources to help you create your perfect green space.</p>
        </section>
        
        <section class="featured-plants grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="plant bg-white shadow-md rounded-lg p-6">
                <img src="https://i.pinimg.com/736x/5e/d3/59/5ed359223772b6a5d14b628a1a8fb318.jpg" alt="Plant 1" class="w-full h-48 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-bold text-gray-800">Fiddle Leaf Fig</h3>
                <p class="mt-2 text-gray-600">A popular indoor plant known for its large, glossy leaves and tree-like appearance.</p>
            </div>
            <div class="plant bg-white shadow-md rounded-lg p-6">
                <img src="https://i.pinimg.com/736x/c4/a6/e0/c4a6e0cc241a15217a954ee7baa56b7c.jpg" alt="Plant 2" class="w-full h-48 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-bold text-gray-800">Snake Plant</h3>
                <p class="mt-2 text-gray-600">An easy-to-care-for plant that thrives in low light and is great for improving indoor air quality.</p>
            </div>
            <div class="plant bg-white shadow-md rounded-lg p-6">
                <img src="https://i.pinimg.com/564x/ca/d4/4b/cad44bc30fbbaf5f4ace16cf1a9a7f54.jpg" alt="Plant 3" class="w-full h-48 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-bold text-gray-800">Monstera Deliciosa</h3>
                <p class="mt-2 text-gray-600">Known for its unique, split leaves, this plant adds a tropical touch to any space.</p>
            </div>
        </section>
        
        <section class="cta text-center">
            <h2 class="text-3xl font-semibold text-gray-800">Join Our Community</h2>
            <p class="mt-4 text-lg text-gray-600">Get tips, share your experiences, and connect with other plant enthusiasts.</p>
            <a href="/join" class="mt-6 inline-block bg-green-600 text-white text-lg font-semibold py-3 px-6 rounded-full hover:bg-green-700 transition duration-300">Join Now</a>
        </section>
    </div>
@endsection
