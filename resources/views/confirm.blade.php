<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - Jadi Ngetop</title>
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
            <h1 class="text-2xl font-bold text-blue-600"><a href="dashboard.html">Jadi Ngetop</a></h1>
            <nav class="hidden md:flex space-x-6 items-center">
                <a href="dashboard.html" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#packages" class="text-gray-700 hover:text-blue-600">Packages</a>
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
            <a href="#packages" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Packages</a>
            <a href="#how-it-works" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">How It Works</a>
            <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
            <div class="block px-4 py-2 bg-green-100">
                <span class="text-green-800 font-semibold">Points: 1,200</span>
            </div>
            <button class="block w-full text-left px-4 py-2 bg-red-600 text-white hover:bg-red-700">Logout</button>
        </div>
    </header>

    <!-- Payment Confirmation Page Content -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <!-- Countdown Timer -->
                <div class="text-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Complete Payment Within</h3>
                    <div id="countdown" class="text-4xl font-bold text-red-600">15:00</div>
                    <p class="text-sm text-gray-500">Time remaining to complete the transaction</p>
                </div>

                <!-- Amount Display -->
                <div class="text-center mb-6">
                    <p class="text-lg text-gray-700">Amount to Pay:</p>
                    <p class="text-5xl font-bold text-yellow-500">Rp 100,000</p>
                </div>

                <!-- QRIS Payment Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4 text-center">Scan QR Code to Pay</h3>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/200x200?text=QRIS+QR+Code" alt="QRIS QR Code" class="mx-auto rounded-lg shadow">
                        <p class="mt-2 text-sm text-gray-500">Use your QRIS-compatible app to scan</p>
                    </div>
                </div>

                <!-- QRIS Tutorial -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">How to Pay with QRIS</h3>
                    <ol class="list-decimal list-inside text-gray-600 space-y-2">
                        <li>Open your mobile payment app (e.g., GoPay, OVO, Dana).</li>
                        <li>Navigate to the QR scan or pay section.</li>
                        <li>Scan the QR code displayed above.</li>
                        <li>Review the payment details and confirm the transaction.</li>
                        <li>Wait for the payment confirmation notification.</li>
                    </ol>
                </div>

                <!-- Check Payment Status Button -->
                <button onclick="checkPaymentStatus()" class="w-full bg-yellow-500 text-white py-3 rounded-lg font-semibold hover:bg-yellow-600 transition text-lg">Check Payment Status</button>
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
            alert('Checking payment status... (Simulated: Payment successful!)');
            // For example, redirect to success page or update points
            // window.location.href = 'dashboard.html';
        }
    </script>
</body>
</html>
