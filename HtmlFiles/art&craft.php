<?php
// locate `src/auth.php` by walking ancestors so this works under different docroots
$root = __DIR__;
while (!file_exists($root . '/src/auth.php')) {
    $parent = dirname($root);
    if ($parent === $root) break;
    $root = $parent;
}
require_once $root . '/src/auth.php';
require_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Art & Craft Activities</title>
    <link href="/Clover/HtmlFiles/src/output.css" rel="stylesheet">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    
    <header class="bg-gradient-to-r from-green-600 to-green-700 text-white p-6 shadow-xl sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex items-center justify-center space-x-4">
                <img src="/Clover/HtmlFiles/images/cloverlogo.png" alt="Clover Logo" class="w-16 h-16 object-contain transform hover:scale-110 transition-transform duration-300" />
                <img src="/Clover/HtmlFiles/images/clovername.png" alt="Clover Name" class="w-72 object-contain" />
            </div>
            <nav class="mt-4">
                <ul class="flex justify-center space-x-8 text-lg font-medium">
                    <li><a href="/Clover/HtmlFiles/index.php" class="hover:text-yellow-300 transition-all duration-300">Home</a></li>
                    <li><a href="/Clover/HtmlFiles/About.php" class="hover:text-yellow-300 transition-all duration-300">About</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h1 class="text-6xl font-black text-purple-700 mb-4 tracking-wider bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                &#x1F3A8; Art & Craft Activities
            </h1>
            <p class="text-xl text-gray-600">Unleash your creativity with these fun activities!</p>
        </div>

        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Drawing Fun</h2>
                <p class="text-gray-600 leading-relaxed">Use pencils or crayons to draw nature, animals, or your family. Let your imagination run wild!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Origami</h2>
                <p class="text-gray-600 leading-relaxed">Fold colorful papers into boats, birds, or frogs! Master the art of paper folding.</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Coloring Time</h2>
                <p class="text-gray-600 leading-relaxed">Fill pre-drawn pictures with bright and happy colors. Create your own colorful world!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Paper Crafts</h2>
                <p class="text-gray-600 leading-relaxed">Make flowers, masks, and greeting cards using scissors and glue. Perfect for special occasions!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Nature Art</h2>
                <p class="text-gray-600 leading-relaxed">Use leaves, stones, or twigs to make fun art. Connect with nature through creativity!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Clay Modeling</h2>
                <p class="text-gray-600 leading-relaxed">Shape clay into fruits, animals, or cartoon faces. Let your hands create magic!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Mask Making</h2>
                <p class="text-gray-600 leading-relaxed">Make creative masks using paper, paint, and elastic bands. Perfect for role-playing!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Collage Art</h2>
                <p class="text-gray-600 leading-relaxed">Use magazines and newspapers to make art collages. Create stories through images!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Handprint Art</h2>
                <p class="text-gray-600 leading-relaxed">Use your hands to stamp paint and create animals or trees! Make your mark in art!</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">&#x1F3A8;</div>
                <h2 class="text-2xl font-bold text-purple-700 mb-3">Recycled Crafts</h2>
                <p class="text-gray-600 leading-relaxed">Turn old bottles, boxes, or cups into creative items. Give new life to everyday objects!</p>
            </div>
        </div>

        <div class="mt-16 text-center space-y-4">
            <p class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-pink-500 italic">
                Try each activity and share your art with friends and Family!
            </p>
            <p class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 italic">
                Be creative, have fun, and show your artwork proudly!
            </p>
        </div>
    </div>

    <footer class="bg-gradient-to-r from-green-600 to-green-700 text-white py-8 mt-20">
        <div class="container mx-auto text-center">
            <p class="text-lg font-medium">&copy; 2025 Clover Education. All rights reserved. &#x1F3A8;</p>
            <div class="mt-4 flex justify-center space-x-6">
                <a href="#" class="hover:text-yellow-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>

