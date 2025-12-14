<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Iklan - Jadi Ngetop</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-50 flex flex-col">

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
    </header>

    <!-- Main -->
    <main class="flex-grow max-w-7xl mx-auto px-4 py-8 w-full">

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
                <h2 class="text-white text-lg font-semibold">Data Iklan</h2>
            </div>

            <div class="p-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left -->
                <div class="lg:col-span-2 space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Nama Pemesan <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="order_name" required
                            class="w-full px-4 py-2 border rounded-lg"
                            placeholder="Masukkan nama pemesan">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            File video/foto <span class="text-red-500">*</span>
                        </label>
                        <input type="file" name="media_file" required
                            accept="image/*,video/*"
                            class="w-full px-4 py-2 border rounded-lg bg-gray-50">
                    </div>
                </div>

                <!-- Right -->
                <div class="border rounded-lg p-6 h-fit">
                    <h3 class="text-lg font-bold mb-2">Paket Basic</h3>
                    <p class="text-sm text-gray-600 mb-6">
                        Tingkatkan visibilitas iklan Anda selama 7 hari.
                    </p>

                    <ul class="space-y-2 mb-6">
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

                    <p class="font-semibold border-t pt-4">7 Hari</p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 pb-8">
                <a href="{{ route('purchase.package') }}"
                    class="px-8 py-3 border rounded-lg">
                    Kembali
                </a>


                <a href="{{ route('ads.detail') }}"
                    class="px-8 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Lanjutkan
                </a>
            </div>

        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2023 Jadi Ngetop. All rights reserved.</p>
            <p class="mt-2">Contact us at support@jadingetop.com</p>
        </div>
    </footer>

</body>

</html>