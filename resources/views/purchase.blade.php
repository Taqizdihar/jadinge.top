<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Points - Jadi Ngetop</title>
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

<body class="bg-gray-50 text-gray-900">
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

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-3xl">

            <!-- Current Points -->
            <!-- Current Points -->
            <div class="rounded-2xl p-8 mb-10 text-center shadow-lg
            text-white
            bg-[linear-gradient(180deg,#091540_0%,_#0C2C56_40%,_#39B4FC_100%)]
            ">
                <h3 class="text-xl font-semibold mb-2">Poin Saya</h3>

                <p class="text-5xl font-bold text-[#F4CE56] drop-shadow">
                    1,200
                </p>

                <p class="text-white/80 text-sm mt-2">
                    Saldo Anda dikonversi menjadi poin untuk pembelian paket iklan.
                </p>
            </div>



            <!-- Form Box -->
            <div class="bg-white rounded-2xl shadow-md p-8 border border-[#f2e7c5]">

                <!-- Input Amount -->
                <label class="block text-gray-700 font-semibold mb-2 text-lg">
                    Masukkan Jumlah (Rp)
                </label>

                <div class="border border-[#D39D2C] bg-[#FFF7D1] rounded-xl flex items-center px-5 py-4 mb-6">
                    <span class="text-xl font-semibold text-gray-700 mr-3">Rp</span>
                    <input
                        id="topup-amount"
                        type="number"
                        class="w-full bg-transparent outline-none text-4xl font-bold text-gray-900"
                        placeholder="0">
                </div>

                <p class="text-gray-600 mb-4">Rp 10.000 = 10 Poin.</p>

                <!-- Quick Select -->
                <div class="grid grid-cols-2 gap-4 mb-10">
                    <button onclick="setAmount(50000)"
                        class="bg-[#FFF7D1] border border-[#E5C261] text-gray-800 py-4 rounded-xl text-lg font-semibold hover:bg-[#ffefb3] transition">
                        + Rp 50.000
                    </button>

                    <button onclick="setAmount(100000)"
                        class="bg-[#FFF7D1] border border-[#E5C261] text-gray-800 py-4 rounded-xl text-lg font-semibold hover:bg-[#ffefb3] transition">
                        + Rp 100.000
                    </button>

                    <button onclick="setAmount(250000)"
                        class="bg-[#FFF7D1] border border-[#E5C261] text-gray-800 py-4 rounded-xl text-lg font-semibold hover:bg-[#ffefb3] transition">
                        + Rp 250.000
                    </button>

                    <button onclick="setAmount(500000)"
                        class="bg-[#FFF7D1] border border-[#E5C261] text-gray-800 py-4 rounded-xl text-lg font-semibold hover:bg-[#ffefb3] transition">
                        + Rp 500.000
                    </button>
                </div>

                <!-- Payment Method -->
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Metode Pembayaran</h3>

                <div class="bg-white border border-[#E5C261] rounded-xl p-6 text-center shadow-sm">
                    <p class="text-gray-600 mb-4">Pembayaran menggunakan QRIS.</p>

                    <!-- QR IMAGE -->
                    <img src="https://via.placeholder.com/240x240?text=QRIS"
                        class="mx-auto shadow-md rounded-lg mb-3">

                    <p class="text-sm text-gray-500">Scan dengan aplikasi yang mendukung QRIS</p>
                </div>

                <!-- QRIS Instructions -->
                <div class="mt-10 bg-white border border-[#E5C261] rounded-2xl p-8 shadow-sm">

                    <h3 class="text-0.5xl font-bold mb-6 text-gray-800">
                        CARA PEMBAYARAN MENGGUNAKAN QRIS
                    </h3>

                    <ol class="list-decimal pl-6 space-y-3 text-gray-700 leading-relaxed text-md">
                        <li>Anda harus terdaftar sebagai pengguna aplikasi uang elektronik, dompet elektronik, atau mobile banking yang mendukung <strong>QRIS</strong>.</li>

                        <li>Anda akan diarahkan ke halaman pembayaran <strong>QRIS</strong>.</li>

                        <li>Cek kembali nominal transaksi kamu, lalu scan QR Code menggunakan aplikasi uang elektronik, dompet elektronik, atau mobile banking yang mendukung <strong>QRIS</strong>.</li>

                        <li>Masukkan PIN untuk melanjutkan transaksi.</li>

                        <li>Transaksi selesai.</li>
                    </ol>
                </div>


                <!-- Payment Button -->
                <a href="{{ route('payment.status', ['invoice' => 'JDN-124532-0123']) }}"
                    class="block w-full mt-8 bg-green-600 text-white text-center py-4 rounded-xl text-xl font-semibold hover:bg-green-700 transition">
                    Lanjutkan Pembayaran
                </a>


            </div>
        </div>
    </section>

    <script>
        function setAmount(value) {
            document.getElementById("topup-amount").value = value;
        }
    </script>


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

        function setAmount(amount) {
            document.getElementById('topup-amount').value = amount;
        }

        function continueToPayment() {
            const amount = document.getElementById('topup-amount').value;
            if (amount && amount >= 10000) {
                alert(`Proceeding to payment for Rp ${amount}. In a real app, this would integrate with payment gateway.`);
                // Here you could redirect to a payment confirmation page or handle payment
            } else {
                alert('Please enter a valid amount (minimum Rp 10,000).');
            }
        }
    </script>
</body>

</html>