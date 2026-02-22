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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Social Science Book | Clover Education</title>
  <link href="/Clover/HtmlFiles/src/output.css" rel="stylesheet">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    

  <!-- Header -->
  <header class="bg-green-500 py-6 shadow-md">
    <div class="flex items-center justify-center space-x-4">
      <img src="/Clover/HtmlFiles/images/cloverlogo.png" alt="clover logo" class="w-14 h-14">
      <img src="/Clover/HtmlFiles/images/clovername.png" alt="clover name" class="w-40">
    </div>
    <nav class="mt-4">
      <ul class="flex justify-center space-x-6">
        <li><a href="/Clover/HtmlFiles/index.php" class="text-white font-medium hover:text-yellow-100 transition">Home</a></li>
        <li><a href="/Clover/HtmlFiles/About.php" class="text-white font-medium hover:text-yellow-100 transition">About</a></li>
      </ul>
    </nav>
  </header>

  <!-- Page Title -->
  <section class="text-center py-10">
    <h1 class="text-4xl font-extrabold text-red-700 drop-shadow-lg">&#x1F4D6; Social Science Book</h1>
    <p class="mt-2 text-lg text-gray-700 font-medium">Discover history, geography, civics and more!</p>
  </section>

  <!-- Book Card with Buttons -->
  <main class="max-w-2xl mx-auto p-6 bg-white rounded-3xl shadow-2xl border border-red-300 transition-transform transform hover:scale-105">
    <div class="text-center">
      <div class="text-5xl mb-4">&#x1F4D6;</div>
      <h2 class="text-2xl font-bold text-red-600">Social Science</h2>
      <p class="text-gray-600 mt-2 mb-6">Learn about people, places, history, and society.</p>

      <div class="grid grid-cols-2 gap-4 mt-4">
        <a href="/Clover/HtmlFiles/pdfs/socialscience/gess301.pdf" target="_blank"
          class="inline-block bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 1
        </a>
        <a href="/Clover/HtmlFiles/pdfs/socialscience/gess302.pdf" target="_blank"
          class="inline-block bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 2
        </a>
        <a href="/Clover/HtmlFiles/pdfs/socialscience/gess303.pdf" target="_blank"
          class="inline-block bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 3
        </a>
        <a href="/Clover/HtmlFiles/pdfs/socialscience/fecu101.pdf" target="_blank"
          class="inline-block bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 4
        </a>
        <a href="/Clover/HtmlFiles/pdfs/socialscience/fecu105.pdf" target="_blank"
          class="inline-block bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 5
        </a>
        <a href="/Clover/HtmlFiles/pdfs/socialscience/fecu106.pdf" target="_blank"
          class="inline-block bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 6
        </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center mt-12 bg-green-500 text-white py-4">
    &copy; 2025 Social Science Book | Clover Education
  </footer>

</body>
</html>

