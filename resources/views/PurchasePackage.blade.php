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

                <!-- CONTENT -->
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

            <!-- PAYMENT METHOD -->
            <div class="bg-white rounded-2xl shadow p-6 border mb-10">

                <h3 class="text-xl font-semibold mb-4">Metode Pembayaran</h3>

                <p class="text-gray-600 mb-4">Gunakan QRIS untuk menyelesaikan transaksi.</p>

                <div class="text-center mb-6">
                    <img src="https://via.placeholder.com/180x180?text=QRIS"
                        class="mx-auto rounded-lg shadow">
                </div>

                <p class="text-sm text-gray-500 text-center">
                    Scan QR untuk menyelesaikan pembayaran.
                </p>

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