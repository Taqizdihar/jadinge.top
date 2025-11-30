<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadi Ngetop - Dashboard</title>
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

<body class="text-gray-900 bg-[linear-gradient(to_bottom,_#FFCD17_10%,_#FEF9E6_100%)]">

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

    <!-- Points Highlight Section (Top Banner) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-10">

                <!-- Gradient Point Card -->
                <div class="flex-1 p-8 rounded-3xl shadow-lg relative overflow-hidden
            bg-[linear-gradient(180deg,#091540_0%,_#0C2C56_40%,_#39B4FC_90%)]
            text-white">

                    <!-- Decorative Circle -->
                    <div class="absolute right-0 top-0 w-80 h-80 rounded-full 
                    bg-[#F2C230] opacity-50 translate-x-10 -translate-y-10"></div>


                    <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                        <!-- LEFT TEXT -->
                        <div>
                            <h3 class="text-2xl font-semibold mb-2">Poin Saya</h3>
                            <p class="text-5xl font-bold mb-1">1,200</p>
                            <p class="text-white/80">Gunakan poin untuk membeli berbagai paket iklan.</p>
                        </div>

                        <!-- BUTTON -->
                        <a href="{{ route('purchase') }}"
                            class="bg-[#FFF7D1] text-black px-6 py-3 rounded-xl shadow-sm font-semibold hover:bg-[#f3eac7] transition">
                            Top Up Points
                        </a>
                    </div>
                </div>

                <!-- Welcome Text -->
                <div class="flex-1">
                    <h2 class="text-3xl font-bold mb-3">Selamat Datang Kembali!</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Temukan berbagai paket iklan premium yang dirancang untuk memperluas jangkauan bisnis Anda.
                        Tingkatkan visibilitas dan capai tujuan pemasaran Anda dengan mudah.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="text-gray-900 bg-[linear-gradient(to_bottom,_#FFCD17_10%,_#FEF9E6_100%)] py-20">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">Paket Iklan</h3>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Paket Basic -->
                <div class="bg-white p-8 rounded-3xl shadow-md border">
                    <h4 class="text-3xl font-bold mb-3">Paket Basic</h4>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Tingkatkan visibilitas iklan Anda dengan penempatan standar selama 7 hari.
                    </p>

                    <hr class="my-6">

                    <h5 class="text-xl font-semibold mb-4">Fitur Utama</h5>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500 text-lg">✔️</span> Tampil di halaman utama
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500 text-lg">✔️</span> Tampil di halaman utama
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500 text-lg">✔️</span> Tampil di halaman utama
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500 text-lg">✔️</span> Tampil di halaman utama
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-yellow-500 text-lg">✔️</span> Tampil di halaman utama
                        </li>
                    </ul>

                    <p class="text-3xl font-bold text-yellow-500 mb-1">250 Poin</p>
                    <p class="text-gray-700 mb-6">7 Hari</p>

                    <a href="{{ route('purchase.package') }}?package=basic"
                        class="block w-full text-center bg-black text-white py-3 rounded-xl font-semibold">
                        Gunakan Paket Ini
                    </a>
                </div>

                <!-- Paket Silver -->
                <div class="bg-white p-8 rounded-3xl shadow-md border">
                    <h4 class="text-3xl font-bold mb-3">Paket Silver</h4>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Ideal untuk visibilitas lebih lama dengan penempatan di featured container.
                    </p>

                    <hr class="my-6">

                    <h5 class="text-xl font-semibold mb-4">Fitur Utama</h5>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2"><span class="text-yellow-500">✔️</span> Tampil di featured container</li>
                    </ul>

                    <p class="text-3xl font-bold text-yellow-500 mb-1">500 Poin</p>
                    <p class="text-gray-700 mb-6">7 Hari</p>

                    <a href="{{ route('purchase.package') }}?package=silver"
                        class="block w-full text-center bg-black text-white py-3 rounded-xl font-semibold">
                        Gunakan Paket Ini
                    </a>
                </div>

                <!-- Paket Premium -->
                <div class="bg-white p-8 rounded-3xl shadow-md border">
                    <h4 class="text-3xl font-bold mb-3">Paket Premium</h4>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Maksimalkan exposure dengan penempatan premium selama 30 hari.
                    </p>

                    <hr class="my-6">

                    <h5 class="text-xl font-semibold mb-4">Fitur Utama</h5>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2"><span class="text-yellow-500">✔️</span> Tampil di premium container</li>
                    </ul>

                    <p class="text-3xl font-bold text-yellow-500 mb-1">1500 Poin</p>
                    <p class="text-gray-700 mb-6">30 Hari</p>

                    <a href="{{ route('purchase.package') }}?package=premium"
                        class="block w-full text-center bg-black text-white py-3 rounded-xl font-semibold">
                        Gunakan Paket Ini
                    </a>
                </div>

                <!-- Paket Gold -->
                <div class="bg-white p-8 rounded-3xl shadow-md border">
                    <h4 class="text-3xl font-bold mb-3">Paket Gold</h4>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Visibilitas terbaik dengan penempatan tertinggi selama 60 hari.
                    </p>

                    <hr class="my-6">

                    <h5 class="text-xl font-semibold mb-4">Fitur Utama</h5>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2"><span class="text-yellow-500">✔️</span> Tampil di gold container</li>
                    </ul>

                    <p class="text-3xl font-bold text-yellow-500 mb-1">3000 Poin</p>
                    <p class="text-gray-700 mb-6">60 Hari</p>

                    <a href="{{ route('purchase.package') }}?package=gold"
                        class="block w-full text-center bg-black text-white py-3 rounded-xl font-semibold">
                        Gunakan Paket Ini
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">How It Works</h3>

            <div class="grid md:grid-cols-3 gap-8 text-center">

                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Top Up Your Balance</h4>
                    <p>Add funds to your account...</p>
                </div>

                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Convert to Points</h4>
                    <p>Your balance is converted to points...</p>
                </div>

                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Choose and Purchase</h4>
                    <p>Select a package and advertise...</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-800 text-white py-8">
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

        function usePackage(packageType) {
            // Simple alert for demonstration; in a real app, this would redirect or handle purchase
            alert(`Using ${packageType} Package. Redirecting to purchase...`);
            // For example, redirect to purchase.html with package parameter
            window.location.href = `purchase.html?package=${packageType}`;
        }
    </script>
</body>

</html>