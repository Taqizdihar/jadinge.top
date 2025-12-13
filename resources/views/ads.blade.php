<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Points - Jadi Ngetop</title>

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
            <button class="px-4 py-2 border rounded-lg">Masuk</button>
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
                <div class="w-20 h-1 bg-blue-500"></div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white">✓</div>
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
        <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg shadow-sm overflow-hidden">
            @csrf

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
                <div class="border rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-2">Paket Basic</h3>
                    <p class="text-sm text-gray-600 mb-6">
                        Tingkatkan visibilitas iklan Anda selama 7 hari.
                    </p>

                    <ul class="space-y-2 mb-6">
                        @for ($i = 0; $i < 5; $i++)
                            <li class="flex items-center text-sm text-gray-600">
                            <span class="text-yellow-500 mr-2">✓</span>
                            Tampil di halaman utama
                            </li>
                            @endfor
                    </ul>

                    <p class="font-semibold border-t pt-4">7 Hari</p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 pb-8">
                <a href="{{ route('ads.detail') }}"
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

</body>

</html>