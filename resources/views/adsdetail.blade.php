<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Iklan - Jadi.Ngetop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
                <button class="text-gray-700 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                </button>
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
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium mt-2">PILIH PAKET</p>
                </div>
                <div class="w-20 h-1 bg-blue-500"></div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium mt-2">ISI DATA</p>
                </div>
                <div class="w-20 h-1 bg-gray-300"></div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
                    <p class="text-sm font-medium mt-2">SELESAI</p>
                </div>
            </div>
        </div>

        <!-- Detail Iklan Section -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-yellow-600 to-yellow-700 px-6 py-4">
                <h2 class="text-white text-lg font-semibold">Detail Iklan</h2>
            </div>

            <!-- Content -->
            <div class="p-8 space-y-6">
                <!-- Paket Basic -->
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Basic</h3>
                            <p class="text-gray-600">Tingkatkan visibilitas iklan Anda dengan penempatan standar selama 7 hari.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900 mb-3">Fitur Utama</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center text-sm text-gray-600">
                                    <span class="text-green-600 mr-2">✓</span>
                                    Tampil di halaman utama
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <span class="text-green-600 mr-2">✓</span>
                                    Tampil di halaman utama
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <span class="text-green-600 mr-2">✓</span>
                                    Tampil di halaman utama
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <span class="text-green-600 mr-2">✓</span>
                                    Tampil di halaman utama
                                </li>
                                <li class="flex items-center text-sm text-gray-600">
                                    <span class="text-green-600 mr-2">✓</span>
                                    Tampil di halaman utama
                                </li>
                            </ul>
                            <p class="mt-4 text-gray-900 font-semibold border-t pt-4">7 Hari</p>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <div class="text-sm text-gray-600 mb-1">Kode Pemesanan</div>
                                <div class="text-gray-900 font-medium">IDN-124532-0123</div>
                            </div>
                            <div>
                                <div class="text-sm text-gray-600 mb-1">Nama Pemesan</div>
                                <div class="text-gray-900 font-medium">Nadine Nath</div>
                            </div>
                            <div>
                                <div class="text-sm text-gray-600 mb-1">Tenggat Iklan</div>
                                <div class="text-gray-900 font-medium">2 Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="border border-gray-200 rounded-lg p-6">
                    <button class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg mb-4 transition-colors">
                        Baca Syarat dan Ketentuan Pengiklanan
                    </button>
                    <div class="flex items-start gap-3">
                        <input type="checkbox" id="terms" class="w-5 h-5 mt-0.5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="terms" class="text-gray-700 text-sm">
                            Silahkan ceklis kotak sebagai bukti bahwa anda mematuhi syarat dan ketentuan yang diberlakukan
                        </label>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 pb-8">
                <a href="#" class="px-8 py-3 border rounded-lg hover:bg-gray-50">
                    Kembali
                </a>
                <a href="#" class="px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Lanjutkan
                </a>
            </div>
        </div>
    </main>

</body>

</html>