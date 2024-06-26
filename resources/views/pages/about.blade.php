@extends('templates.base')

@section('content')
    <div class="container mx-auto py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-green-600">About Us</h1>
            <p class="mt-4 text-xl text-gray-700">Learn more about our mission, team, and story</p>
        </header>
        
        <section class="mission text-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Our Mission</h2>
            <p class="mt-4 text-lg text-gray-600">At Plant Haven, our mission is to inspire and educate plant enthusiasts of all levels. We believe in the power of plants to enhance our living spaces, improve our well-being, and connect us with nature.</p>
        </section>
        
        <section class="team grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <h2 class="col-span-full text-3xl font-semibold text-gray-800 text-center">Meet the Team</h2>
            <div class="team-member bg-white shadow-md rounded-lg p-6">
                <img src="https://i.pinimg.com/236x/82/f8/1e/82f81e76834bda78be2df656a32e6332.jpg" alt="Team Member 1" class="w-full h-48 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-bold text-gray-800">Jane Doe</h3>
                <p class="mt-2 text-gray-600">Founder & CEO</p>
                <p class="mt-2 text-gray-600">Jane has a passion for plants and has been sharing her knowledge and enthusiasm with others for over a decade.</p>
            </div>
            <div class="team-member bg-white shadow-md rounded-lg p-6">
                <img src="https://i.pinimg.com/236x/b5/0c/7c/b50c7c2f6eb82357c3b11f562a7263cc.jpg" alt="Team Member 2" class="w-full h-48 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-bold text-gray-800">John Smith</h3>
                <p class="mt-2 text-gray-600">Lead Horticulturist</p>
                <p class="mt-2 text-gray-600">With a background in botany, John leads our plant care and cultivation efforts, ensuring our advice is rooted in science.</p>
            </div>
            <div class="team-member bg-white shadow-md rounded-lg p-6">
                <img src="https://i.pinimg.com/236x/c0/75/0a/c0750ab5282335fac6457fdb75db73bc.jpg" alt="Team Member 3" class="w-full h-48 object-cover rounded-md">
                <h3 class="mt-4 text-2xl font-bold text-gray-800">Emily Johnson</h3>
                <p class="mt-2 text-gray-600">Community Manager</p>
                <p class="mt-2 text-gray-600">Emily is dedicated to fostering a vibrant community of plant lovers, helping them connect and share their experiences.</p>
            </div>
        </section>
        
        <section class="history text-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Our Story</h2>
            <p class="mt-4 text-lg text-gray-600">Plant Haven was founded in 2015 with a simple goal: to make plant care accessible to everyone. What started as a small blog has grown into a thriving community of plant enthusiasts worldwide. We are proud to offer a comprehensive resource for plant care, gardening tips, and more.</p>
        </section>
    </div>
@endsection
