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
    </header>


    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-3xl">

            <!-- Current Points -->
            <div class="rounded-2xl p-6 mb-8 text-center shadow
bg-[linear-gradient(180deg,#091540_0%,#0C2C56_45%,#39B4FC_100%)]">

                <p class="text-sm uppercase tracking-wide text-white/70">
                    Poin Saya
                </p>

                <p class="text-4xl font-semibold text-[#F4CE56] mt-1">
                    1,200
                </p>

                <p class="text-xs text-white/70 mt-2 max-w-xs mx-auto">
                    Saldo Anda dikonversi menjadi poin untuk pembelian paket iklan.
                </p>
            </div>



            <!-- Form Box -->
            <div class="bg-white rounded-2xl shadow-md p-8 border border-[#f2e7c5]">

                <!-- Input Amount -->
                <label class="block text-gray-700 font-semibold mb-2 text-lg">
                    Masukkan Jumlah (Rp)
                </label>

                <div class="border border-[#D39D2C] bg-[#FFF7D1]
rounded-xl px-5 py-3 mb-3
focus-within:ring-2 focus-within:ring-[#F4CE56]
transition">

                    <div class="flex items-center">
                        <span class="text-lg font-medium text-gray-600 mr-2">Rp</span>
                        <input
                            id="topup-amount"
                            type="number"
                            class="w-full bg-transparent outline-none
      text-2xl font-semibold text-gray-900"
                            placeholder="0"
                            oninput="updatePointEstimate()">
                    </div>
                </div>

                <p id="point-estimate" class="text-sm text-gray-600 mb-6">
                    ≈ 0 poin
                </p>


                <!-- Quick Select -->
                <div class="grid grid-cols-2 gap-4 mb-10">
                    <button onclick="setAmount(50000)"
                        class="group bg-[#FFF7D1] border border-[#E5C261]
rounded-xl py-3 px-4 text-left
hover:bg-[#ffefb3] active:scale-95 transition">

                        <p class="text-sm text-gray-600">Top up</p>
                        <p class="text-lg font-semibold text-gray-800">
                            Rp 50.000
                        </p>
                    </button>


                    <button onclick="setAmount(100000)"
                        class="group bg-[#FFF7D1] border border-[#E5C261]
rounded-xl py-3 px-4 text-left
hover:bg-[#ffefb3] active:scale-95 transition">

                        <p class="text-sm text-gray-600">Top up</p>
                        <p class="text-lg font-semibold text-gray-800">
                            Rp 100.000
                        </p>
                    </button>


                    <button onclick="setAmount(250000)"
                        class="group bg-[#FFF7D1] border border-[#E5C261]
rounded-xl py-3 px-4 text-left
hover:bg-[#ffefb3] active:scale-95 transition">

                        <p class="text-sm text-gray-600">Top up</p>
                        <p class="text-lg font-semibold text-gray-800">
                            Rp 250.000
                        </p>
                    </button>

                    <button onclick="setAmount(500000)"
                        class="group bg-[#FFF7D1] border border-[#E5C261]
rounded-xl py-3 px-4 text-left
hover:bg-[#ffefb3] active:scale-95 transition">

                        <p class="text-sm text-gray-600">Top up</p>
                        <p class="text-lg font-semibold text-gray-800">
                            Rp 500.000
                        </p>
                    </button>

                </div>

                <!-- Payment Method -->
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Metode Pembayaran</h3>

                <div class="border border-[#E5C261] rounded-xl p-5 text-center">

                    <p class="text-sm text-gray-600 mb-3">
                        Scan QRIS untuk membayar
                    </p>

                    <img src="https://via.placeholder.com/200x200?text=QRIS"
                        class="mx-auto rounded-lg shadow mb-3">

                    <p class="text-xs text-gray-500">
                        Mendukung semua e-wallet & mobile banking
                    </p>
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
                    class="block w-full mt-8 bg-blue-600 text-white text-center py-4 rounded-xl text-xl font-semibold hover:bg-blue-700 transition">
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

        function setAmount(value) {
            const input = document.getElementById("topup-amount")
            input.value = value
            updatePointEstimate()
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

        function updatePointEstimate() {
            const value = Number(document.getElementById('topup-amount').value || 0)
            const points = Math.floor(value / 1000)
            document.getElementById('point-estimate').innerText =
                `≈ ${points} poin`
        }
    </script>
</body>

</html>