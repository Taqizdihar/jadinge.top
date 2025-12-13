<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status - Jadi Ngetop</title>
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

        .soft-red {
            background: linear-gradient(135deg, #FF6B6B, #FF8E8E);
        }

        .pastel-yellow {
            background-color: #FFF9C4;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-pink-50 to-yellow-50 text-gray-900 min-h-screen flex flex-col">
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
                    <span class="text-green-800 font-semibold">Coins: 1,200</span>
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
                <span class="text-green-800 font-semibold">Coins: 1,200</span>
            </div>
            <button class="block w-full text-left px-4 py-2 bg-red-600 text-white hover:bg-red-700">Logout</button>
        </div>
    </header>

    <main class="flex-grow">
        <!-- Soft Red Top Bar with Countdown (Styled Like Example) -->
        <div class="w-full bg-[#FEEDEE] py-3 border-b border-red-200">
            <div class="container mx-auto px-4 flex items-center justify-center gap-3">

                <!-- Icon -->
                <span class="text-[#E92929] text-xl">
                    <img
                        src="https://img.icons8.com/ios-glyphs/30/timer.png"
                        alt="timer"
                        class="w-[30px] h-[30px]"
                        style="filter: invert(24%) sepia(93%) saturate(7483%) hue-rotate(356deg) brightness(96%) contrast(112%);" />

                </span>

                <!-- Text -->
                <p class="text-[#E92929] font-medium">
                    Selesaikan pembayaran dalam
                </p>

                <!-- Timer -->
                <div class="flex items-center gap-1">
                    <span id="countdown"
                        class="px-2 py-0.5 bg-[#E92929] text-white rounded-md font-semibold text-lg">
                        15:00
                    </span>
                </div>
            </div>
        </div>


        <!-- Main Content -->
        <section class="py-12">
            <div class="container mx-auto px-4 max-w-xl">
                <!-- Rounded White Card -->
                <div class="bg-white rounded-2xl shadow-lg p-10">
                    <!-- Bold Title -->
                    <h2 class="text-2xl font-bold text-center mb-6">Payment Status</h2>

                    <!-- Invoice Number -->
                    <div class="mb-6">
                        <p class="text-gray-600 text-sm mb-1">Invoice Number</p>
                        <p class="text-blue-600 text-lg font-semibold underline cursor-pointer">INV-2023-001234</p>
                    </div>

                    <!-- Total Amount -->
                    <div class="mb-6">
                        <p class="text-gray-600 text-sm mb-1">Total Amount</p>
                        <p class="text-green-600 text-4xl font-bold">Rp 100,000</p>
                    </div>

                    <!-- Subtle Separator -->
                    <hr class="border-gray-200 mb-6">

                    <!-- Pastel Yellow Alert Box -->
                    <div class="pastel-yellow p-4 rounded-lg mb-6">
                        <p class="text-yellow-800 font-semibold">Payment Pending</p>
                        <p class="text-yellow-700 text-sm">The system has not yet received your payment. Please complete the transfer promptly to avoid expiration.</p>
                    </div>

                    <!-- Bold Blue CTA Button -->
                    <button onclick="checkPaymentStatus()" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition shadow-md">Check Payment Status</button>

                    <!-- Status Update Area (Initially Hidden) -->
                    <div id="status-update" class="mt-6 hidden">
                        <div class="bg-green-100 p-4 rounded-lg">
                            <p class="text-green-800 font-semibold">Payment Successful!</p>
                            <p class="text-green-700 text-sm">Your coins have been added to your balance.</p>
                            <a href="/dashboard" class="inline-block mt-4 bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Return to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            }

            // Countdown Timer (15 minutes)
            let timeLeft = 15 * 60; // 15 minutes in seconds
            const countdownElement = document.getElementById('countdown');

            function updateCountdown() {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                countdownElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                if (timeLeft > 0) {
                    timeLeft--;
                    setTimeout(updateCountdown, 1000);
                } else {
                    countdownElement.textContent = '00:00';
                    alert('Payment time expired. Please try again.');
                    // Optionally redirect back
                }
            }

            updateCountdown(); // Start the countdown

            function checkPaymentStatus() {
                // Simulate checking status; in real app, this would call an API
                const statusUpdate = document.getElementById('status-update');
                statusUpdate.classList.remove('hidden');
                // For example, hide pending message or update accordingly
                // In a real scenario, fetch status from server
            }
        </script>
    </main>
</body>

<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; 2023 Jadi Ngetop. All rights reserved.</p>
        <p>Contact us at support@jadingetop.com</p>
    </div>
</footer>

</html>