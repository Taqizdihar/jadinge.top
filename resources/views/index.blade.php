<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadingetop - Advertising Services for Telkom Community</title>

    <!-- Tailwind CSS -->
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

                <!-- FIXED -->
                <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Login
                </a>

                <a href="{{ route('register') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Register
                </a>
            </nav>

            <button class="md:hidden text-gray-700" onclick="toggleMenu()">Menu</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <a href="#home" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="#packages" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Packages</a>
            <a href="#how-it-works" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">How It Works</a>
            <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>

            <!-- FIXED -->
            <a href="{{ route('login') }}" class="block px-4 py-2 bg-blue-600 text-white hover:bg-blue-700">Login</a>
            <a href="{{ route('register') }}" class="block px-4 py-2 bg-green-600 text-white hover:bg-green-700">Register</a>
        </div>
    </header>

    <!-- Hero -->
    <section id="home" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Become Top with Jadi Ngetop</h2>
            <p class="text-lg md:text-xl mb-8">
                Advertising services for the Telkom community. Boost your visibility with our daily, weekly, or monthly packages.
            </p>
            <a href="#packages" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                Explore Packages
            </a>
        </div>
    </section>

    <!-- Packages -->
    <section id="packages" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12">Our Advertising Packages</h3>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- Daily -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h4 class="text-2xl font-semibold mb-4">Daily Package</h4>
                    <p class="text-gray-600 mb-4">Perfect for short-term boosts...</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Main TV Container</li>
                        <li>Duration: 1 Day</li>
                        <li>Points Required: 100</li>
                    </ul>

                    <a
                        href="{{ route('purchase') }}?package=daily"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 inline-block text-center w-full">
                        Purchase
                    </a>
                </div>

                <!-- Weekly -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h4 class="text-2xl font-semibold mb-4">Weekly Package</h4>
                    <p class="text-gray-600 mb-4">Ideal for sustained visibility...</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Featured TV Container</li>
                        <li>Duration: 7 Days</li>
                        <li>Points Required: 500</li>
                    </ul>

                    <a
                        href="{{ route('purchase') }}?package=weekly"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 inline-block text-center w-full">
                        Purchase
                    </a>
                </div>

                <!-- Monthly -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h4 class="text-2xl font-semibold mb-4">Monthly Package</h4>
                    <p class="text-gray-600 mb-4">Maximize exposure with prime placement...</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Placement: Premium TV Container</li>
                        <li>Duration: 30 Days</li>
                        <li>Points Required: 1500</li>
                    </ul>

                    <a
                        href="{{ route('purchase') }}?package=monthly"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 inline-block text-center w-full">
                        Purchase
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-gray-100">
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
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
    </script>
</body>

</html>