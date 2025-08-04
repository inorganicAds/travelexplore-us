<?php
// index.php
// This is the homepage of the website.
include 'includes/header.php';
?>

<main class="container py-8">
    <section class="text-center py-16 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl shadow-lg mb-12">
        <h1 class="text-5xl font-extrabold mb-4 leading-tight">Navigate Cities with Confidence</h1>
        <p class="text-xl mb-8">Your curated collection of travel essentials for the modern urban explorer.</p>
        <a href="shop.php" class="btn-primary text-lg">Explore Our Essentials</a>
    </section>

    <section class="mb-12">
        <h2 class="text-4xl font-bold text-center mb-10 text-blue-800">Featured Categories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-6 text-center">
                <img src="https://placehold.co/300x200/4F46E5/FFFFFF?text=Anti-Theft+Bags" alt="Anti-Theft Bags" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-blue-700 mb-2">Secure & Smart Bags</h3>
                <p class="text-gray-600">Keep your valuables safe with slash-resistant and RFID-blocking designs.</p>
                <a href="shop.php?category=bags" class="text-blue-600 hover:underline mt-4 inline-block">Shop Now &rarr;</a>
            </div>
            <div class="card p-6 text-center">
                <img src="https://placehold.co/300x200/EF4444/FFFFFF?text=Portable+Chargers" alt="Portable Chargers" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-blue-700 mb-2">Power & Tech</h3>
                <p class="text-gray-600">Stay charged and connected with high-capacity portable chargers and adapters.</p>
                <a href="shop.php?category=tech" class="text-blue-600 hover:underline mt-4 inline-block">Shop Now &rarr;</a>
            </div>
            <div class="card p-6 text-center">
                <img src="https://placehold.co/300x200/22C55E/FFFFFF?text=Walking+Shoes" alt="Comfortable Walking Shoes" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-blue-700 mb-2">Comfortable Footwear</h3>
                <p class="text-gray-600">Explore miles of city streets in ultimate comfort and style.</p>
                <a href="shop.php?category=shoes" class="text-blue-600 hover:underline mt-4 inline-block">Shop Now &rarr;</a>
            </div>
        </div>
    </section>

    <section class="text-center py-12 bg-white rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold mb-4 text-blue-800">Ready for Your Next Urban Adventure?</h2>
        <p class="text-gray-600 mb-6">Discover the gear that makes city exploration effortless and enjoyable.</p>
        <a href="shop.php" class="btn-primary">View All Products</a>
    </section>
</main>

<?php
// includes/footer.php
// This file contains the common footer for all pages, including legal links.
?>
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">UrbanEssentials</h3>
                <p class="text-gray-400">&copy; <?php echo date("Y"); ?> UrbanEssentials. All rights reserved.</p>
            </div>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <li><a href="privacy-policy.php" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a></li>
                    <li><a href="terms-conditions.php" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a></li>
                    <li><a href="return-policy.php" class="text-gray-400 hover:text-white text-sm">Return Policy</a></li>
                    <li><a href="shipping-policy.php" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a></li>
                </ul>
            </nav>
            <div class="text-gray-400 text-sm">
                <p>Contact Us: info@urbanessentials.com</p>
                <p>Follow Us: <a href="#" class="hover:text-white">Facebook</a> | <a href="#" class="hover:text-white">Instagram</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
