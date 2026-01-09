<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
</head>

<body>
    <section class="bg-gray-50 flex items-center justify-center min-h-screen">

        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-xl shadow-lg border border-black">

            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-900">Create an account</h1>
                <p class="text-sm text-gray-500 mt-2">Join us and start your 14-day free trial.</p>
            </div>

            <form action="#" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" placeholder="John Doe"
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input 
                    type="email" 
                    placeholder="example@gmail.com"
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" placeholder="••••••••"
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>

                <button type="submit"
                    class="w-full py-3 mt-4 text-white bg-blue-600 rounded-lg font-semibold hover:bg-blue-700 shadow-md transition-all">
                    Create Account
                </button>
            </form>

            <p class="text-center text-sm text-gray-600">
                Already have an account?
                <a href="#" class="text-blue-600 font-semibold hover:underline">Log in</a>
            </p>
        </div>

    </section>
</body>

</html>