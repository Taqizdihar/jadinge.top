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

<body class="bg-[#F9FAFB]-50 text-gray-900 min-h-screen flex flex-col">
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

        <!-- 🔴 Countdown Bar -->
        <div class="w-full bg-[#FEEDEE] py-3 border-b border-red-200">
            <div class="container mx-auto px-4 flex items-center justify-center gap-3">

                <img
                    src="https://img.icons8.com/ios-glyphs/30/timer.png"
                    alt="timer"
                    class="w-[26px] h-[26px]"
                    style="filter: invert(24%) sepia(93%) saturate(7483%) hue-rotate(356deg) brightness(96%) contrast(112%);" />

                <p class="text-[#E92929] font-medium">
                    Selesaikan pembayaran dalam
                </p>

                <span
                    id="countdown"
                    class="px-3 py-1 bg-[#E92929] text-white rounded-md font-semibold text-lg">
                    15:00
                </span>
            </div>
        </div>

        <!-- 🟤 Payment Status Section -->
        <section class="py-14">
            <div class="container mx-auto max-w-6xl">
                <div class="grid lg:grid-cols-2 gap-6">
                    <!-- Left Card - Invoice Info -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <div class="mb-6">
                            <h2 class="text-gray-500 text-sm font-medium mb-2">Invoice</h2>
                            <p class="text-blue-600 text-2xl font-bold">INV-2023-001234</p>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-gray-500 text-sm font-medium mb-2">Total Pembayaran</h3>
                            <p class="text-green-600 text-4xl font-bold">Rp 100.000</p>
                        </div>

                        <!-- Warning Box -->
                        <div class="bg-gradient-to-r from-yellow-50 to-amber-50 border-2 border-yellow-300 rounded-2xl p-5 mb-6">
                            <h4 class="text-amber-800 text-base font-bold mb-2">Menunggu Pembayaran</h4>
                            <p class="text-amber-700 text-sm leading-relaxed">
                                Sistem belum menerima pembayaran Anda. Silakan selesaikan sebelum waktu habis.
                            </p>
                        </div>

                        <button onclick="checkPaymentStatus()" class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold text-base hover:bg-blue-700 transition-all shadow-lg hover:shadow-xl active:scale-95 mb-4">
                            Cek Status Pembayaran
                        </button>

                        <!-- Success State - Below Button -->
                        <div id="status-update" class="hidden">
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-300 rounded-xl p-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-green-800 font-bold text-base">Pembayaran Berhasil!</h3>
                                        <p class="text-green-700 text-sm">Coins telah ditambahkan ke akun Anda</p>
                                    </div>
                                </div>
                                <a href="dashboard.html" class="block text-center bg-green-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:bg-green-700 transition-all mt-4 text-sm">
                                    Kembali ke Dashboard →
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Card - QR & Instructions -->
                    <div class="space-y-6">
                        <!-- QR Code Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h3 class="text-gray-800 text-lg font-bold text-center mb-6">
                                Scan QRIS untuk melakukan pembayaran
                            </h3>

                            <div class="flex justify-center mb-6">
                                <div class="w-56 h-56 bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <div class="text-center">
                                        <svg class="w-20 h-20 mx-auto text-gray-400 mb-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                                            <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                                        </svg>
                                        <p class="text-gray-500 text-sm font-medium">QR Code</p>
                                    </div>
                                </div>
                            </div>

                            <p class="text-center text-gray-600 text-sm">
                                Mendukung semua e-wallet & mobile banking
                            </p>
                        </div>

                        <!-- Instructions Card -->
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h4 class="text-gray-800 font-bold mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                                Petunjuk Pembayaran
                            </h4>
                            <ol class="space-y-3 text-sm text-gray-700">
                                <li class="flex gap-3">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">1</span>
                                    <span>Buka aplikasi e-wallet atau mobile banking Anda</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">2</span>
                                    <span>Pilih menu Scan QRIS atau Bayar dengan QRIS</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">3</span>
                                    <span>Scan QR Code yang ditampilkan di atas</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">4</span>
                                    <span>Konfirmasi pembayaran sesuai nominal</span>
                                </li>
                                <li class="flex gap-3">
                                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-xs font-bold">5</span>
                                    <span>Klik "Cek Status Pembayaran" untuk verifikasi</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Scripts -->
        <script>
            // Countdown
            let timeLeft = 15 * 60
            const countdown = document.getElementById('countdown')

            function updateCountdown() {
                const minutes = Math.floor(timeLeft / 60)
                const seconds = timeLeft % 60
                countdown.textContent =
                    `${minutes.toString().padStart(2,'0')}:${seconds.toString().padStart(2,'0')}`

                if (timeLeft > 0) {
                    timeLeft--
                    setTimeout(updateCountdown, 1000)
                } else {
                    countdown.textContent = '00:00'
                    alert('Waktu pembayaran habis')
                }
            }

            updateCountdown()

            function checkPaymentStatus() {
                document.getElementById('status-update').classList.remove('hidden')
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