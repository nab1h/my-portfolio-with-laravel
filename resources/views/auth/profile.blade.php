<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Portfolio</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 min-h-screen">
    @session('success')
        <div class="text-green-500 text-sm my-1">{{session('success')}}</div>
    @endsession
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-indigo-600">Portfolio</span>
                </div>
            </div>
        </div>
    </nav>
<section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold mb-6">Welcome to Portfolio</h1>
            <p class="text-xl mb-8 text-indigo-100">Build amazing things with us</p>


            <div class="flex justify-center space-x-4">
                <a href="{{url('/home')}}" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Home Page</a>
                <form action="{{url('/logout')}}" method="POST">
                    @csrf
                    <button
                    type="submit"
                    class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition"
                >
                Logout
                </button>
                </form>
            </div>


        </div>
    </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">&copy; 2026 Portfolio. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
