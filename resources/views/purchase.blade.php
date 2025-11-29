<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Points - Jadi Ngetop</title>
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

    <!-- Top Up Page Content -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <!-- Current Points Highlighted Card -->
                <div class="bg-blue-100 p-4 rounded-lg mb-6 text-center">
                    <h3 class="text-lg font-semibold text-blue-800 mb-2">Current Points</h3>
                    <p class="text-3xl font-bold text-blue-600">1,200 Points</p>
                </div>

                <!-- Top-Up Amount Input -->
                <div class="mb-6">
                    <label for="topup-amount" class="block text-gray-700 font-semibold mb-2">Top-Up Amount (Rupiah)</label>
                    <input type="number" id="topup-amount" name="topup-amount" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter amount in Rupiah" min="10000">
                </div>

                <!-- Quick-Select Buttons -->
                <div class="mb-6">
                    <p class="text-gray-700 font-semibold mb-2">Quick Select:</p>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="setAmount(50000)" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Rp 50,000</button>
                        <button onclick="setAmount(100000)" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Rp 100,000</button>
                        <button onclick="setAmount(200000)" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Rp 200,000</button>
                        <button onclick="setAmount(500000)" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">Rp 500,000</button>
                    </div>
                </div>

                <!-- Payment Method Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Payment Method</h3>
                    <p class="text-gray-600 mb-4">We accept payment via QRIS only. Scan the QR code below to complete your top-up.</p>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/200x200?text=QRIS+QR+Code" alt="QRIS QR Code" class="mx-auto rounded-lg shadow">
                        <p class="mt-2 text-sm text-gray-500">Scan with your QRIS-compatible app</p>
                    </div>
                </div>

                <!-- Continue to Payment Button -->
                <a href="{{ route('confirm') }}?package={{ $selected }}"
                    class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition text-lg block text-center">
                    Continue to Payment
                </a>

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

        function setAmount(amount) {
            document.getElementById('topup-amount').value = amount;
        }

        function continueToPayment() {
            const amount = document.getElementById('topup-amount').value;
            if (amount && amount >= 10000) {
                alert(`Proceeding to payment for Rp ${amount}. In a real app, this would integrate with payment gateway.`);
                // Here you could redirect to a payment confirmation page or handle payment
            } else {
                alert('Please enter a valid amount (minimum Rp 10,000).');
            }
        }
    </script>
</body>

</html>