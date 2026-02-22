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
  <title>Mini Dictionary</title>
  <link rel="stylesheet" href="/Clover/HtmlFiles/src/output.css">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    
    <header class="bg-gradient-to-r from-green-600 to-green-700 text-white p-6 shadow-xl sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex items-center justify-center space-x-4">
                <img src="/Clover/HtmlFiles/images/cloverlogo.png" alt="clovername" class="w-16 h-16 object-contain transform hover:scale-110 transition-transform duration-300">
                <img src="/Clover/HtmlFiles/images/clovername.png" alt="cloverlogo" class="w-72 object-contain">
            </div>
            <nav class="mt-4">
                <ul class="flex justify-center space-x-8 text-lg font-medium">
                    <li><a href="/Clover/HtmlFiles/index.php" class="hover:text-yellow-300 transition-all duration-300">Home</a></li>
                    <li><a href="/Clover/HtmlFiles/About.php" class="hover:text-yellow-300 transition-all duration-300">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="content text-center my-12">
        <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800 mb-2">Learning for Children</h2>
        <h2 class="text-2xl text-gray-700 mb-2">Learn English</h2>
        <p class="text-lg text-gray-600">Practice reading, writing, and new words.</p>
        <p class="text-lg text-gray-700 font-medium">Learning words and doing quizzes to make learning enjoyable.</p>
    </section>
    
    <div class="font-sans min-h-screen flex items-start p-8 justify-center">
        <div class="bg-white p-8 rounded-3xl shadow-2xl w-full max-w-md transform transition-all duration-300 hover:scale-105 hover:shadow-3xl">
            <h1 class="text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800 mb-6">Simple Dictionary</h1>

            <div class="flex mb-6">
                <input id="wordInput" type="text" placeholder="Enter a word..." class="flex-1 p-3 border-2 border-gray-200 rounded-l-xl focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-green-400 transition duration-300">
                <button onclick="getDefinition()" class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 rounded-r-xl hover:from-green-700 hover:to-green-800 transform transition-all duration-300 hover:scale-105">Search</button>
            </div>

            <div id="result" class="mt-6 text-gray-700 space-y-4"></div>
            
            <section class="bg-gradient-to-r from-green-50 to-amber-50 p-6 rounded-2xl shadow-lg mt-8 transform transition-all duration-300 hover:scale-105">
                <p class="text-gray-700 font-semibold text-lg mb-2">Click this link below for the fun Quiz.</p>
                <a href="/Clover/HtmlFiles/english/dictionaryquize.php" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-green-600 hover:from-orange-600 hover:to-green-700 transition-all duration-300">Quiz</a>
            </section>
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

    <script>
        async function getDefinition() {
            const word = document.getElementById("wordInput").value.trim();
            const resultDiv = document.getElementById("result");
            resultDiv.innerHTML = "";

            if (!word) {
                resultDiv.innerHTML = "<p class='text-red-500 font-medium'>Please enter a word.</p>";
                return;
            }

            try {
                const res = await fetch(`https://api.dictionaryapi.dev/api/v2/entries/en/${word}`);
                const data = await res.json();

                if (data.title === "No Definitions Found") {
                    resultDiv.innerHTML = `<p class='text-red-500 font-medium'>No definitions found for "<strong>${word}</strong>".</p>`;
                    return;
                }

                const meanings = data[0].meanings;
                resultDiv.innerHTML = `<h2 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800">Definition of "<span class="text-green-600">${word}</span>":</h2>`;
                
                meanings.forEach((meaning, idx) => {
                    resultDiv.innerHTML += `
                        <div class="mt-4 p-4 bg-gray-50 rounded-xl">
                            <p class="italic text-green-600 font-medium">${meaning.partOfSpeech}</p>
                            <ul class="list-disc list-inside mt-2 space-y-2">
                                ${meaning.definitions.map(def => `<li class="text-gray-700">${def.definition}</li>`).join('')}
                            </ul>
                        </div>
                    `;
                });

            } catch (error) {
                resultDiv.innerHTML = "<p class='text-red-500 font-medium'>Something went wrong. Please try again.</p>";
                console.error(error);
            }
        }
    </script>
</body>
</html>
