<?php
// includes/header.php
// This file contains the common header for all pages.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Explorer Essentials - Your City Break Companion</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Light gray background */
            color: #334155; /* Darker text */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }
        .nav-link {
            @apply text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out;
        }
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out;
        }
        .card {
            @apply bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out hover:scale-105;
        }
    </style>
</head>
<body class="antialiased">
    <header class="bg-white shadow-sm py-4">
        <div class="container flex justify-between items-center">
            <div class="flex-shrink-0">
                <a href="index.php" class="text-2xl font-bold text-blue-800">
                    Urban<span class="text-blue-600">Essentials</span>
                </a>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="shop.php" class="nav-link">Shop</a></li>
                    <li><a href="blog.php" class="nav-link">Blog</a></li>
                    <li><a href="about.php" class="nav-link">About Us</a></li>
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
                    <li><a href="faq.php" class="nav-link">FAQ</a></li>
                </ul>
            </nav>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md py-2">
            <ul class="flex flex-col items-center space-y-2">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="shop.php" class="nav-link">Shop</a></li>
                <li><a href="blog.php" class="nav-link">Blog</a></li>
                <li><a href="about.php" class="nav-link">About Us</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="faq.php" class="nav-link">FAQ</a></li>
            </ul>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
