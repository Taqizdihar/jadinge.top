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
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center">
                <span class="text-sm text-gray-500 mr-4">Profile</span>
                <h1 class="text-2xl font-bold text-yellow-500">Jadi.Ngetop</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-700 hover:text-gray-900">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Paket</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Cara Bayar</a>
            </nav>
            <div class="flex items-center gap-4">
                <div class="bg-green-100 px-4 py-2 rounded-lg">
                    <span class="text-green-800 font-semibold">Points: 1,200</span>
                </div>
                <button class="px-4 py-2 border rounded-lg">Masuk</button>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="max-w-7xl mx-auto px-4 py-8">

        <!-- Progress -->
        <div class="flex justify-center mb-12">
            <div class="flex items-center space-x-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white">✓</div>
                    <p class="text-sm font-medium mt-2">PILIH PAKET</p>
                </div>
                <div class="w-20 h-1 bg-gray-300"></div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
                    <p class="text-sm font-medium mt-2">ISI DATA</p>
                </div>
                <div class="w-20 h-1 bg-gray-300"></div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
                    <p class="text-sm font-medium mt-2">SELESAI</p>
                </div>
            </div>
        </div>

        <!-- Form -->
        <form class="bg-white rounded-lg shadow-sm overflow-hidden">
            
            <div class="bg-gradient-to-r from-yellow-600 to-yellow-700 px-6 py-4">
                <h2 class="text-white text-lg font-semibold">Pembayaran Paket</h2>
            </div>

            <div class="p-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Section -->
                <div class="lg:col-span-2 space-y-6">
                    
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
                            <a href="#" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition font-medium">
                                Top Up Poin
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 pb-8">
                <a href="#" class="px-8 py-3 border rounded-lg">
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

</html>