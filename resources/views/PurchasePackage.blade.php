<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Package - Jadi Ngetop</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Plus Jakarta Sans Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .yellow-accent {
            background-color: #FFC800;
        }
        .soft-yellow {
            background-color: #FFF8E1;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600"><a href="dashboard.html">Jadi Ngetop</a></h1>
            <nav class="hidden md:flex space-x-6 items-center">
                <a href="dashboard.html" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#packages" class="text-gray-700 hover:text-blue-600">Paket Iklan</a>
                <a href="#how-it-works" class="text-gray-700 hover:text-blue-600">How It Works</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a>
                <!-- Points Container in Header -->
                <div class="bg-green-100 px-4 py-2 rounded-lg">
                    <span class="text-green-800 font-semibold">Points: 1,200</span>
                </div>
                <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Logout</button>
            </nav>
            <button class="md:hidden text-gray-700" onclick="toggleMenu()">Menu</button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <a href="dashboard.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="#packages" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Paket Iklan</a>
            <a href="#how-it-works" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">How It Works</a>
            <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
            <div class="block px-4 py-2 bg-green-100">
                <span class="text-green-800 font-semibold">Points: 1,200</span>
            </div>
            <button class="block w-full text-left px-4 py-2 bg-red-600 text-white hover:bg-red-700">Logout</button>
        </div>
    </header>

    <!-- Payment Summary Container -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold mb-6 text-center">Payment Summary</h2>
            <div class="yellow-accent p-8 rounded-lg shadow-lg text-white">
                <h3 class="text-2xl font-semibold mb-4">Selected Package: Silver</h3>
                <div class="bg-white text-gray-900 p-6 rounded-lg">
                    <p class="text-lg mb-2"><strong>Package Name:</strong> Silver Package</p>
                    <p class="text-lg mb-2"><strong>Duration:</strong> 7 Days</p>
                    <p class="text-gray-600 mb-4">Ideal for sustained visibility. Your ad appears in the featured TV container for a full week, reaching a targeted audience in the Telkom community.</p>
                    <p class="text-lg mb-4"><strong>Key Features:</strong></p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Featured TV Container</li>
                        <li>High visibility and engagement</li>
                        <li>Automatic ad placement and management</li>
                    </ul>
                    <p class="text-2xl font-bold text-blue-600">Total Points Required: 500</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Breakdown Container -->
    <section class="py-10 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-4">Order Breakdown</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p><strong>Package Type:</strong> Silver</p>
                        <p><strong>Duration:</strong> 7 Days</p>
                    </div>
                    <div>
                        <p><strong>Final Calculated Total:</strong></p>
                        <p class="text-2xl font-bold text-blue-600">500 Points</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Confirmation Button -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <button onclick="proceedToCheckout()" class="yellow-accent text-white px-12 py-4 rounded-lg font-semibold hover:opacity-90 transition text-xl">Proceed to Checkout</button>
        </div>
    </section>

    <!-- Full Checkout Page (Initially Hidden) -->
    <section id="full-checkout" class="py-10 bg-gray-50 hidden">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-6 text-center">Detailed Payment Breakdown</h2>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-4">Package Benefits</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Increased visibility in Telkom community</li>
                        <li>Targeted audience reach for UMKM and businesses</li>
                        <li>Easy ad management and instant activation</li>
                        <li>Professional placement in featured containers</li>
                    </ul>
                </div>
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <p><strong>Duration:</strong> 7 Days</p>
                        <p><strong>Price:</strong> 500 Points</p>
                    </div>
                    <div>
                        <p><strong>Total Points Required:</strong></p>
                        <p class="text-2xl font-bold text-blue-600">500 Points</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Method Container -->
    <section id="payment-method" class="py-10 bg-white hidden">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-4 text-center">Payment Method</h3>
                <p class="text-gray-600 mb-6 text-center">Complete your payment through QRIS. Scan the QR code below with your compatible app.</p>
                <div class="text-center mb-6">
                    <img src="https://via.placeholder.com/200x200?text=QRIS+QR+Code" alt="QRIS QR Code" class="mx-auto rounded-lg shadow">
                </div>
                <p class="text-sm text-gray-500 text-center">Instructions: Open your QRIS app, scan the code, and confirm the payment.</p>
            </div>
        </div>
    </section>

    <!-- Final Payment Button -->
    <section id="final-button" class="py-10 bg-gray-50 hidden">
        <div class="container mx-auto px-4 max-w-4xl">
            <button onclick="payNow()" class="w-full yellow-accent text-white py-4 rounded-lg font-semibold hover:opacity-90 transition text-xl">Bayar Sekarang</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Jadi Ngetop. All rights reserved.</p>
            <p>Contact us at support@jadingetop.com</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function proceedToCheckout() {
            // Show full checkout sections
            document.getElementById('full-checkout').classList.remove('hidden');
            document.getElementById('payment-method').classList.remove('hidden');
            document.getElementById('final-button').classList.remove('hidden');
            // Optionally scroll to it
            document.getElementById('full-checkout').scrollIntoView({ behavior: 'smooth' });
        }

        function payNow() {
            // Simulate payment; in real app, redirect to confirmation
            alert('Payment initiated. Redirecting to confirmation...');
            window.location.href = 'confirmation.html';
        }
    </script>
</body>
</html>
