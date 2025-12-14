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
                        <div class="w-10 h-10 rounded-full bg-[#2663EB] ring-8 ring-yellow-200"></div>

                        <p class="absolute top-14 text-xs font-semibold text-gray-700 whitespace-nowrap">
                            ISI DATA
                        </p>
                    </div>

                    <!-- LINE 2 -->
                    <div class="flex-1 h-2 bg-yellow-200"></div>

                    <!-- STEP 3 (ACTIVE) -->
                    <div class="relative flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-[#2663EB] ring-8 ring-yellow-200"></div>

                        <p class="absolute top-14 text-xs font-semibold text-gray-700 whitespace-nowrap">
                            SELESAI
                        </p>
                    </div>

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
                <a href="{{ route('ads.create') }}"
                    class="px-8 py-3 border rounded-lg hover:bg-gray-50">
                    Kembali
                </a>

                <a href="#" class="px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Lanjutkan
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Jadi Ngetop. All rights reserved.</p>
            <p>Contact us at support@jadingetop.com</p>
        </div>
    </footer>


</body>

</html>