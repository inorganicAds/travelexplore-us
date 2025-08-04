<?php
// shop.php
// This page displays a list of products.
include 'includes/header.php';
?>

<main class="container py-8">
    <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">Our Urban Essentials Collection</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <!-- Product Card 1: Anti-Theft Backpack -->
        <div class="card">
            <img src="https://placehold.co/400x300/4F46E5/FFFFFF?text=Anti-Theft+Backpack" alt="Anti-Theft Backpack" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Secure City Backpack</h3>
                <p class="text-gray-600 text-sm mb-4">Slash-resistant, RFID-blocking, and smart organization for peace of mind.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-green-600">$89.99</span>
                    <a href="product-detail.php?id=1" class="btn-primary text-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2: Portable Power Bank -->
        <div class="card">
            <img src="https://placehold.co/400x300/EF4444/FFFFFF?text=Portable+Charger" alt="Portable Power Bank" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Ultra-Compact Power Bank</h3>
                <p class="text-gray-600 text-sm mb-4">Keep your devices charged on the go with this high-capacity charger.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-green-600">$34.99</span>
                    <a href="product-detail.php?id=2" class="btn-primary text-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 3: Comfortable Walking Shoes -->
        <div class="card">
            <img src="https://placehold.co/400x300/22C55E/FFFFFF?text=Walking+Shoes" alt="Comfortable Walking Shoes" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">CloudWalk City Sneakers</h3>
                <p class="text-gray-600 text-sm mb-4">Experience all-day comfort for endless city exploration.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-green-600">$119.99</span>
                    <a href="product-detail.php?id=3" class="btn-primary text-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 4: RFID Blocking Wallet -->
        <div class="card">
            <img src="https://placehold.co/400x300/F97316/FFFFFF?text=RFID+Wallet" alt="RFID Blocking Wallet" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Slim RFID Wallet</h3>
                <p class="text-gray-600 text-sm mb-4">Protect your cards from digital theft in a sleek design.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-green-600">$29.99</span>
                    <a href="product-detail.php?id=4" class="btn-primary text-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 5: Collapsible Water Bottle -->
        <div class="card">
            <img src="https://placehold.co/400x300/6366F1/FFFFFF?text=Water+Bottle" alt="Collapsible Water Bottle" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Collapsible Hydration Bottle</h3>
                <p class="text-gray-600 text-sm mb-4">Stay hydrated on the go, collapses for easy packing.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-green-600">$19.99</span>
                    <a href="product-detail.php?id=5" class="btn-primary text-sm">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 6: Travel First Aid Kit -->
        <div class="card">
            <img src="https://placehold.co/400x300/10B981/FFFFFF?text=First+Aid+Kit" alt="Travel First Aid Kit" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Compact First Aid Kit</h3>
                <p class="text-gray-600 text-sm mb-4">Essential for minor scrapes and emergencies during your travels.</p>
                <div class="flex justify-between items-center">
                    <span class="text-lg font-bold text-green-600">$14.99</span>
                    <a href="product-detail.php?id=6" class="btn-primary text-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</main>
