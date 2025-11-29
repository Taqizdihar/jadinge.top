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
                        class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
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


    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Welcome Back to Jadi Ngetop</h2>
            <p class="text-lg md:text-xl mb-8">Ready to boost your visibility? Choose a package and start advertising now.</p>
            <a href="#packages" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Browse Packages</a>
        </div>
    </section>

    <!-- Points Container Section -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4 max-w-2xl">
            <div class="bg-green-50 p-6 rounded-lg shadow-md text-center">
                <h3 class="text-2xl font-semibold mb-4">Your Points Balance</h3>
                <p class="text-4xl font-bold text-green-600 mb-4">1,200 Points</p>
                <p class="text-gray-600">Use your points to purchase advertising packages. Top up anytime to increase your balance.</p>
                <a href="{{ route('purchase') }}"
                    class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    Top Up Points
                </a>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">Our Advertising Packages</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Daily Package -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-2xl font-semibold mb-4">Daily Package</h4>
                    <p class="text-gray-600 mb-4">Perfect for short-term boosts. Your ad will be placed in the main TV container on the Telkom community platform for 24 hours.</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Main TV Container</li>
                        <li>Duration: 1 Day</li>
                        <li>Points Required: 100</li>
                    </ul>
                    <button onclick="purchasePackage('Daily')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Purchase Now</button>
                </div>
                <!-- Weekly Package -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-2xl font-semibold mb-4">Weekly Package</h4>
                    <p class="text-gray-600 mb-4">Ideal for sustained visibility. Your ad appears in the featured TV container for a full week.</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Featured TV Container</li>
                        <li>Duration: 7 Days</li>
                        <li>Points Required: 500</li>
                    </ul>
                    <button onclick="purchasePackage('Weekly')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Purchase Now</button>
                </div>
                <!-- Monthly Package -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h4 class="text-2xl font-semibold mb-4">Monthly Package</h4>
                    <p class="text-gray-600 mb-4">Maximize exposure with prime placement in the premium TV container for an entire month.</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Premium TV Container</li>
                        <li>Duration: 30 Days</li>
                        <li>Points Required: 1500</li>
                    </ul>
                    <button onclick="purchasePackage('Monthly')" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Purchase Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">How It Works</h3>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Top Up Your Balance</h4>
                    <p>Add funds to your account to build your balance.</p>
                </div>
                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Convert to Points</h4>
                    <p>Your balance is automatically converted to points for purchasing services.</p>
                </div>
                <div>
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Choose and Purchase</h4>
                    <p>Select a package and use your points to advertise in the specified TV containers.</p>
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

        function purchasePackage(packageType) {
            // Simple alert for demonstration; in a real app, this would redirect or handle purchase
            alert(`Purchasing ${packageType} Package. Redirecting to payment...`);
            // For example, redirect to purchase.html with package parameter
            window.location.href = `purchase.html?package=${packageType}`;
        }
    </script>
</body>

</html>