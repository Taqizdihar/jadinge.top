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

<body class="text-gray-900 bg-[#FEF9E6]">

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
                        class="border border-gray-300 px-4 py-1.5 rounded-lg hover:bg-[#FEF9E6] transition">
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

    <!-- PAYMENT WRAPPER -->
    <section class="py-10 bg-transparent">
        <div class="container mx-auto px-4 max-w-3xl">

            <!-- TITLE -->
            <h2 class="text-3xl font-bold text-center mb-8">Pembayaran</h2>

            <!-- PACKAGE CARD -->
            <div class="bg-white rounded-2xl shadow border border-yellow-300 overflow-hidden mb-10">

                <!-- HEADER -->
                <div class="bg-[#FFCD17] px-6 py-3">
                    <p class="text-xl font-semibold text-black">30 Hari</p>
                </div>
                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-2">Paket Gold</h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Tingkatkan visibilitas iklan Anda dengan penempatan standar selama 30 hari.
                    </p>

                    <!-- FEATURES -->
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500">✔</span> Tampil di halaman utama
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500">✔</span> Tampil di featured container
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500">✔</span> Penempatan prioritas
                        </li>
                    </ul>

                    <p class="text-3xl text-yellow-500 font-extrabold">1500 Poin</p>
                </div>
            </div>

            <!-- ORDER BREAKDOWN -->
            <div class="bg-white rounded-2xl shadow p-6 mb-10 border">

                <h3 class="text-xl font-semibold mb-4">Rincian Pembayaran</h3>

                <div class="flex justify-between py-2 text-gray-700">
                    <span>Paket</span>
                    <span class="font-medium">Paket Gold</span>
                </div>

                <div class="flex justify-between py-2 text-gray-700">
                    <span>Durasi</span>
                    <span class="font-medium">30 Hari</span>
                </div>

                <hr class="my-3">

                <div class="flex justify-between py-1">
                    <span class="font-bold text-lg">Total Pembayaran</span>
                    <span class="font-bold text-lg">1500 Poin</span>
                </div>

            </div>

            <!-- PAYMENT METHOD (static-not enough poin) -->
            <div class="bg-white rounded-2xl shadow p-6 border mb-10 max-w-3xl mx-auto">
                <h3 class="text-xl font-semibold mb-4">Metode Pembayaran</h3>

                <!-- Balance Info -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-yellow-100 border border-yellow-400">
                            <span class="text-yellow-600 font-bold">S</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Saldo Poin Anda</p>
                            <p class="text-gray-600 text-sm">300 Poin</p>
                        </div>
                    </div>

                    <!-- Toggle DISABLED -->
                    <!-- Toggle ACTIVE -->
                    <label class="relative inline-flex items-center cursor-pointer select-none">
                        <input type="checkbox" class="sr-only peer" checked>

                        <!-- Track ON -->
                        <div class="w-12 h-6 bg-green-500 rounded-full peer-checked:bg-green-500 transition"></div>

                        <!-- Knob bergerak -->
                        <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow 
                transition peer-checked:translate-x-6"></div>
                    </label>

                </div>

                <!-- Error Message -->
                <p class="text-red-600 font-medium bg-red-50 p-4 rounded-lg flex items-center gap-2">
                    <span>Saldo Poin Tidak Cukup</span>
                    <span class="text-gray-400 cursor-pointer">?</span>
                </p>

                <p class="text-gray-600 mb-4 mt-2 text-sm">
                    Anda membutuhkan 500 poin untuk membeli paket ini. Silakan lakukan top up terlebih dahulu.
                </p>

                <div class="text-center">
                    <a href="{{ route('purchase') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Top Up Poin
                    </a>
                </div>
            </div>


            <!-- BUTTON FINAL -->
            <button class="w-full bg-green-600 text-white text-xl font-semibold py-4 rounded-xl shadow hover:bg-green-700 transition">
                Bayar Sekarang
            </button>

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
            document.getElementById('full-checkout').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function payNow() {
            // Simulate payment; in real app, redirect to confirmation
            alert('Payment initiated. Redirecting to confirmation...');
            window.location.href = 'confirmation.html';
        }
    </script>
</body>

</html>