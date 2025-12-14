<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Package - Jadi Ngetop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-50">

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

    <!-- Main -->
    <main class="max-w-7xl mx-auto px-4 py-8">

        <!-- Progress Steps -->
       <div class="flex justify-center mb-20">


            <div class="w-full max-w-5xl px-4">
                <div class="flex items-center">

                    <!-- STEP 1 (DONE) -->
                    <div class="relative flex flex-col items-center">
                       <div class="w-10 h-10 rounded-full bg-[#2663EB] ring-8 ring-yellow-200"></div>

                        <p class="absolute top-14 text-xs font-semibold text-gray-700 whitespace-nowrap">
                            PILIH PAKET
                        </p>
                    </div>

                    <!-- LINE 1 -->
                    <div class="flex-1 h-2 bg-yellow-200"></div>

                    <!-- STEP 2 (DONE) -->
                    <div class="relative flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                        <p class="absolute top-14 text-xs font-semibold text-gray-700 whitespace-nowrap">
                            ISI DATA
                        </p>
                    </div>

                    <!-- LINE 2 -->
                    <div class="flex-1 h-2 bg-gray-200"></div>

                    <!-- STEP 3 (ACTIVE) -->
                    <div class="relative flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                        <p class="absolute top-14 text-xs font-semibold text-gray-700 whitespace-nowrap">
                            SELESAI
                        </p>
                    </div>


                </div>
            </div>
        </div>

        <!-- Form -->
        <form class="bg-white rounded-lg shadow-sm overflow-hidden">

            <div class="bg-gradient-to-r from-yellow-600 to-yellow-700 px-6 py-4">
                <h2 class="text-white text-lg font-semibold">Pembayaran Paket</h2>
            </div>

            <div class="p-8 grid grid-cols-1 gap-8 max-w-6xl mx-auto">



                <!-- Left Section -->
                <div class="space-y-6">

                    <!-- Package Info -->
                    <div class="border border-yellow-300 rounded-lg overflow-hidden">
                        <div class="bg-yellow-400 px-6 py-3">
                            <p class="text-xl font-semibold text-black">30 Hari</p>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2">Paket Gold</h3>
                            <p class="text-gray-700 mb-4">
                                Tingkatkan visibilitas iklan Anda dengan penempatan standar selama 30 hari.
                            </p>

                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <span class="text-yellow-500">✓</span> Tampil di halaman utama
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <span class="text-yellow-500">✓</span> Tampil di featured container
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <span class="text-yellow-500">✓</span> Penempatan prioritas
                                </li>
                            </ul>

                            <p class="text-3xl text-yellow-500 font-extrabold">1500 Poin</p>
                        </div>
                    </div>

                    <!-- Order Breakdown -->
                    <div class="border rounded-lg p-6">
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

                    <!-- Payment Method -->
                    <div class="border rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Metode Pembayaran</h3>

                        <!-- Balance Info -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 flex items-center justify-center rounded-full bg-yellow-100 border border-yellow-400">
                                    <span class="text-yellow-600 font-bold">S</span>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800">Saldo Poin Anda</p>
                                    <p class="text-gray-600 text-sm">300 Poin</p>
                                </div>
                            </div>

                            <!-- Toggle Switch -->
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="w-12 h-6 bg-green-500 rounded-full peer-checked:bg-green-500 transition"></div>
                                <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow transition peer-checked:translate-x-6"></div>
                            </label>
                        </div>

                        <!-- Error Message -->
                        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                            <p class="text-red-600 font-medium flex items-center gap-2">
                                <span>Saldo Poin Tidak Cukup</span>
                                <span class="text-gray-400 cursor-pointer">?</span>
                            </p>
                        </div>

                        <p class="text-gray-600 mb-4 text-sm">
                            Anda membutuhkan 1200 poin untuk membeli paket ini. Silakan lakukan top up terlebih dahulu.
                        </p>

                        <div class="text-center">
                            <a href="{{ route('purchase') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition font-medium">
                                Top Up Poin
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 pb-8">
                <a href="{{ route('dashboard') }}"
                    class="px-8 py-3 border rounded-lg hover:bg-gray-50">
                    Kembali
                </a>


                <a href="{{ route('ads.create') }}" class="px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Gunakan Poin
                </a>
            </div>

        </form>



    </main>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>

<!-- Footer -->
<footer id="contact" class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; 2023 Jadi Ngetop. All rights reserved.</p>
        <p>Contact us at support@jadingetop.com</p>
    </div>
</footer>

</html>