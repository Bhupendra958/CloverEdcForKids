<!DOCTYPE html>
<html lang="en">
<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require_once __DIR__ . '/src/auth.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clover Learning</title>
    <link href="src/output.css" rel="stylesheet">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    

    <header class="bg-gradient-to-r from-green-600 to-green-700 p-4 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex items-center justify-center space-x-4">
                <img src="images/cloverlogo.png" alt="clovername" class="w-16 h-16 object-contain">
                <img src="images/clovername.png" alt="cloverlogo" class="w-48 h-16 object-contain">
            </div>
            <nav class="mt-2">
                <ul class="flex justify-center space-x-6">
                    <?php render_header_links(); ?>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-300 hover:shadow-3xl">
                    <div class="bg-gradient-to-r from-green-600 to-green-700 p-6 text-center">
                        <h2 class="text-3xl font-bold text-white">Welcome Back!</h2>
                        <p class="text-yellow-300 mt-2">Please login to continue learning</p>
                    </div>
                    <div class="p-8">
                        <?php $flash = get_flash(); if ($flash): ?>
                        <div class="mb-4 px-4 py-3 rounded-lg <?php echo $flash['type'] === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                            <?php echo htmlspecialchars($flash['message']); ?>
                        </div>
                        <?php endif; ?>
                        <form action="src/login.php" method="post" class="space-y-6">
                            <?php if (!empty($_GET['redirect'])): ?>
                                <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($_GET['redirect']); ?>">
                            <?php endif; ?>
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" required 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 pl-10"
                                        placeholder="Enter your email">
                                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">&#x1F4E7;</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password" required 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 pl-10"
                                        placeholder="Enter your password">
                                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">&#x1F512;</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input type="checkbox" id="remember" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                                </div>
                                <a href="#" class="text-sm text-green-600 hover:text-green-700 hover:underline">Forgot password?</a>
                            </div>
                            <button type="submit" 
                                class="w-full bg-gradient-to-r from-green-600 to-green-700 text-white font-bold py-3 px-6 rounded-lg hover:from-green-700 hover:to-green-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Login
                            </button>
                            <p class="text-center text-gray-600">
                                Don't have an account? 
                                <a href="registration.php" class="text-green-600 hover:text-green-700 font-medium hover:underline transition-colors duration-300">
                                    Register here
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gradient-to-r from-green-600 to-green-700 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-lg">&copy; 2025 Clover Education. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-6">
                <a href="#" class="hover:text-yellow-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
