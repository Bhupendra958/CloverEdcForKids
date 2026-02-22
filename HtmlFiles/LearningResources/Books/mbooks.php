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
  <title>Math Book | Clover Education</title>
  <link href="/Clover/HtmlFiles/src/output.css" rel="stylesheet">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    

  <!-- Header -->
  <header class="bg-green-500 p-4 text-center">
    <div class="flex items-center justify-center space-x-4">
      <img src="/Clover/HtmlFiles/images/cloverlogo.png" alt="clover logo" class="w-14 h-14">
      <img src="/Clover/HtmlFiles/images/clovername.png" alt="clover name" class="w-40">
    </div>
    <nav class="mt-4">
      <ul class="flex justify-center space-x-6">
        <li><a href="/Clover/HtmlFiles/index.php" class="text-white font-medium hover:text-purple-100 transition">Home</a></li>
        <li><a href="/Clover/HtmlFiles/About.php" class="text-white font-medium hover:text-purple-100 transition">About</a></li>
      </ul>
    </nav>
  </header>

  <!-- Page Title -->
  <section class="text-center py-10">
    <h1 class="text-4xl font-extrabold text-yellow-700 drop-shadow-lg">&#x1F4D6; Math Book</h1>
    <p class="mt-2 text-lg text-gray-700 font-medium">Choose a chapter and start exploring mathematics!</p>
  </section>

  <!-- Book Card with Buttons -->
  <main class="max-w-2xl mx-auto p-6 bg-white rounded-3xl shadow-2xl border border-yellow-300 transition-transform transform hover:scale-105">
    <div class="text-center">
      <div class="text-5xl mb-4">&#x1F4D6;</div>
      <h2 class="text-2xl font-bold text-blue-600">Math</h2>
      <p class="text-red-600 mt-2 mb-6">Solve problems, learn numbers, and master operations.</p>

      <!-- Buttons -->
      <div class="grid grid-cols-2 gap-4 justify-center">
        <!-- Linked PDF -->
        <a href="/Clover/HtmlFiles/pdfs/maths/eemh101.pdf" target="_blank"
          class="inline-block bg-yellow-400 hover:bg-green-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 1
        </a>
        <!-- Placeholder Buttons -->
        <a href="/Clover/HtmlFiles/pdfs/maths/eemh102.pdf" target="_blank"
          class="inline-block bg-yellow-400 hover:bg-green-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 2
        </a>
        <a href="/Clover/HtmlFiles/pdfs/maths/eemh103.pdf" target="_blank"
          class="inline-block bg-yellow-400 hover:bg-green-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 3
        </a>
        <a href="/Clover/HtmlFiles/pdfs/maths/eemh104.pdf" target="_blank"
          class="inline-block bg-yellow-400 hover:bg-green-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Open 4
        </a>
        <a href="/Clover/HtmlFiles/pdfs/maths/eemh105.pdf" target="_blank"
          class="inline-block bg-yellow-400 hover:bg-green-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 5
        </a>
        <a href="/Clover/HtmlFiles/pdfs/maths/eemh106.pdf" target="_blank"
          class="inline-block bg-yellow-400 hover:bg-green-500 text-white py-2 px-4 rounded-full font-semibold transition duration-200">
          Book 6
        </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center mt-12 bg-green-500 text-white py-4">
    &copy; 2025 Math Book | Clover Education
  </footer>

</body>
</html>

