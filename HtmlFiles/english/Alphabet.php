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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphabet Learning - Clover Education</title>
    <link href="/Clover/HtmlFiles/src/output.css" rel="stylesheet">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    
    <header class="bg-gradient-to-r from-green-600 to-green-700 text-white p-6 shadow-xl sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex items-center justify-center space-x-4">
                <img src="/Clover/HtmlFiles/images/cloverlogo.png" alt="Clover Logo" class="w-16 h-16 object-contain" />
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
            <h1 class="text-5xl font-black text-purple-700 mb-4 tracking-wider bg-clip-text  bg-gradient-to-r from-purple-600 to-pink-600">
                &#x1F4DA; Alphabet Learning
            </h1>
            <p class="text-xl text-gray-700">Learn the English alphabet with fun!</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- A -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">A</h2>
                    <p class="text-gray-600 mb-4">Apple</p>
                    <img src="/Clover/HtmlFiles/images/apple.png" alt="Apple" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- B -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">B</h2>
                    <p class="text-gray-600 mb-4">Ball</p>
                    <img src="/Clover/HtmlFiles/images/ball.png" alt="Ball" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- C -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">C</h2>
                    <p class="text-gray-600 mb-4">Cat</p>
                    <img src="/Clover/HtmlFiles/images/cat.png" alt="Cat" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- D -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">D</h2>
                    <p class="text-gray-600 mb-4">Dog</p>
                    <img src="/Clover/HtmlFiles/images/dog.png" alt="Dog" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- E -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">E</h2>
                    <p class="text-gray-600 mb-4">Elephant</p>
                    <img src="/Clover/HtmlFiles/images/elephant.png" alt="Elephant" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- F -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">F</h2>
                    <p class="text-gray-600 mb-4">Fish</p>
                    <img src="/Clover/HtmlFiles/images/fish.png" alt="Fish" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- G -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">G</h2>
                    <p class="text-gray-600 mb-4">Giraffe</p>
                    <img src="/Clover/HtmlFiles/images/graphes.png" alt="Giraffe" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- H -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">H</h2>
                    <p class="text-gray-600 mb-4">House</p>
                    <img src="/Clover/HtmlFiles/images/hores.png" alt="House" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- I -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">I</h2>
                    <p class="text-gray-600 mb-4">Ice Cream</p>
                    <img src="/Clover/HtmlFiles/images/icecream.png" alt="Ice Cream" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- J -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">J</h2>
                    <p class="text-gray-600 mb-4">Jelly</p>
                    <img src="/Clover/HtmlFiles/images/jug.png" alt="Jelly" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- K -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">K</h2>
                    <p class="text-gray-600 mb-4">Kite</p>
                    <img src="/Clover/HtmlFiles/images/kite.png" alt="Kite" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- L -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">L</h2>
                    <p class="text-gray-600 mb-4">Lion</p>
                    <img src="/Clover/HtmlFiles/images/lion.png" alt="Lion" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- M -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">M</h2>
                    <p class="text-gray-600 mb-4">Monkey</p>
                    <img src="/Clover/HtmlFiles/images/mango.png" alt="Monkey" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- N -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">N</h2>
                    <p class="text-gray-600 mb-4">Nest</p>
                    <img src="/Clover/HtmlFiles/images/nest.png" alt="Nest" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- O -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">O</h2>
                    <p class="text-gray-600 mb-4">Orange</p>
                    <img src="/Clover/HtmlFiles/images/orange.png" alt="Orange" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- P -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">P</h2>
                    <p class="text-gray-600 mb-4">Panda</p>
                    <img src="/Clover/HtmlFiles/images/parrot.png" alt="Panda" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- Q -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">Q</h2>
                    <p class="text-gray-600 mb-4">Queen</p>
                    <img src="/Clover/HtmlFiles/images/queen.png" alt="Queen" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- R -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">R</h2>
                    <p class="text-gray-600 mb-4">Rabbit</p>
                    <img src="/Clover/HtmlFiles/images/rabbit.png" alt="Rabbit" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- S -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">S</h2>
                    <p class="text-gray-600 mb-4">Sun</p>
                    <img src="/Clover/HtmlFiles/images/sun.png" alt="Sun" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- T -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">T</h2>
                    <p class="text-gray-600 mb-4">Tree</p>
                    <img src="/Clover/HtmlFiles/images/tiger.png" alt="Tree" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- U -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">U</h2>
                    <p class="text-gray-600 mb-4">Umbrella</p>
                    <img src="/Clover/HtmlFiles/images/umbrella.png" alt="Umbrella" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- V -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">V</h2>
                    <p class="text-gray-600 mb-4">Violin</p>
                    <img src="/Clover/HtmlFiles/images/violen.png" alt="Violin" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- W -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">W</h2>
                    <p class="text-gray-600 mb-4">Watermelon</p>
                    <img src="/Clover/HtmlFiles/images/watch.png" alt="Watermelon" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- X -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">X</h2>
                    <p class="text-gray-600 mb-4">Xylophone</p>
                    <img src="/Clover/HtmlFiles/images/xylophone.png" alt="Xylophone" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- Y -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">Y</h2>
                    <p class="text-gray-600 mb-4">Yak</p>
                    <img src="/Clover/HtmlFiles/images/yak.png" alt="Yak" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>

            <!-- Z -->
            <div class="bg-white p-6 rounded-3xl shadow-xl transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-4">Z</h2>
                    <p class="text-gray-600 mb-4">Zebra</p>
                    <img src="/Clover/HtmlFiles/images/zebra.png" alt="Zebra" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                </div>
            </div>
        </div>

        <!-- Quiz Section -->
        <div class="text-center mt-12">
            <a href="/Clover/HtmlFiles/english/Alphabetquize.php" 
               class="inline-block bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-4 rounded-xl font-medium text-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                Take Alphabet Quiz
            </a>
        </div>
    </div>

    <footer class="bg-gradient-to-r from-green-600 to-green-700 text-white py-8 mt-20">
        <div class="container mx-auto text-center">
            <p class="text-lg font-medium">&copy; 2025 Clover Education. All rights reserved. &#x1F4DA;</p>
            <div class="mt-4 flex justify-center space-x-6">
                <a href="#" class="hover:text-yellow-300 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-yellow-300 transition-colors">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
