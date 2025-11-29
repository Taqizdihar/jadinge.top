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
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Jadi Ngetop</h1>

            <nav class="hidden md:flex space-x-6 items-center">
                <a href="#home" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#packages" class="text-gray-700 hover:text-blue-600">Packages</a>
                <a href="#how-it-works" class="text-gray-700 hover:text-blue-600">How It Works</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a>

                <div class="bg-green-100 px-4 py-2 rounded-lg">
                    <span class="text-green-800 font-semibold">Points: 1,200</span>
                </div>

                <!-- LOGOUT BUTTON FIX -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                        Logout
                    </button>
                </form>
            </nav>

            <button class="md:hidden text-gray-700" onclick="toggleMenu()">Menu</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <a href="#home" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="#packages" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Packages</a>
            <a href="#how-it-works" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">How It Works</a>
            <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>

            <div class="block px-4 py-2 bg-green-100">
                <span class="text-green-800 font-semibold">Points: 1,200</span>
            </div>

            <!-- LOGOUT MOBILE FIX -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="block w-full text-left px-4 py-2 bg-red-600 text-white hover:bg-red-700">
                    Logout
                </button>
            </form>
        </div>
    </header>


    <!-- Purchase Page Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-8">Purchase Package</h2>

            <!-- Product Information Container -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-2xl font-semibold mb-4">Package Details</h3>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <img src="https://via.placeholder.com/400x300?text=Package+Image" alt="Package Image" class="w-full rounded-lg shadow">
                    </div>
                    <div class="md:w-1/2 md:pl-6">
                        <h4 class="text-xl font-semibold mb-2">Weekly Package</h4>
                        <p class="text-gray-600 mb-4">Ideal for sustained visibility. Your ad appears in the featured TV container for a full week.</p>
                        <ul class="list-disc list-inside mb-4">
                            <li>Placement: Featured TV Container</li>
                            <li>Duration: 7 Days</li>
                            <li>Points Required: 500</li>
                        </ul>
                        <p class="text-lg font-bold text-blue-600">Price: 500 Points</p>
                    </div>
                </div>
            </div>

            <!-- Points Container -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-2xl font-semibold mb-4">Your Points</h3>
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600">Current Points Balance:</p>
                        <p class="text-2xl font-bold text-green-600">1,200 Points</p>
                    </div>
                    <div>
                        <p class="text-gray-600">Points Required:</p>
                        <p class="text-2xl font-bold text-red-600">500 Points</p>
                    </div>
                </div>
                <p class="mt-4 text-gray-600">After purchase, your remaining balance will be: <span class="font-bold">700 Points</span></p>
            </div>

            <!-- Payment Section -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md mb-8">
                <h3 class="text-2xl font-semibold mb-4">Payment Method</h3>
                <p class="text-gray-600 mb-4">We accept payment via QRIS only. Scan the QR code below to complete your purchase.</p>
                <div class="text-center">
                    <img src="https://via.placeholder.com/200x200?text=QRIS+QR+Code" alt="QRIS QR Code" class="mx-auto rounded-lg shadow">
                    <p class="mt-4 text-sm text-gray-500">Scan with your QRIS-compatible app</p>
                </div>
            </div>

            <!-- Continue to Payment Button -->
            <div class="text-center">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">Continue to Payment</button>
            </div>
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
    </script>
</body>

</html>