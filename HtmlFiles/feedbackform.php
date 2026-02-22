<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Clover/HtmlFiles/src/auth.php';
require_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Clover/HtmlFiles/src/output.css">
</head>
<body>
    <a href="javascript:history.back()" class="fixed top-4 left-4 z-50 bg-white/90 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-white transition-all duration-300">&larr; Back</a>


    
    <header>
        <div class="flex items-start justify-center space-x-2">
            <img src="/Clover/HtmlFiles/images/cloverlogo.png" alt="clovername" width="60px">
            <img src="/Clover/HtmlFiles/images/clovername.png" alt="cloverlogo" width="300px">
        </div>
    </header>
<div class="flex justify-center items-center min-h-screen ">
    <div class="w-full max-w-md bg-green-200 shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 text-center">We Value Your Feedback</h2>
        <p class="text-gray-600 text-center mb-4">Help us improve Clover Education by sharing your thoughts.</p>

        <form class="space-y-4">
            <div>
                <label for="name" class="block font-bold text-sm  text-gray-700">Your Name:</label>
                <input type="text" id="name" name="name" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label for="email" class="block font-bold text-sm  text-gray-700">Your Email:</label>
                <input type="email" id="email" name="email" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label for="message" class="block font-bold text-sm  text-gray-700">Your Feedback:</label>
                <textarea id="message" name="message" rows="4" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500"></textarea>
            </div>

            <div>
                <label for="rating" class="block font-bold text-sm  text-gray-700">Rate Your Experience:</label>
                <select id="rating" name="rating"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                    <option value="5">Excellent &#9733;&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="4">Very Good &#9733;&#9733;&#9733;&#9733;</option>
                    <option value="3">Good &#9733;&#9733;&#9733;</option>
                    <option value="2">Fair &#9733;&#9733;</option>
                    <option value="1">Poor &#9733;</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-green-600 text-white font-medium py-2 px-4 rounded-md hover:bg-green-700 transition">
                Submit Feedback
            </button>
        </form>
    </div>
</div>
<footer class="bg-green-500 text-white text-center py-4 mt-10">
    <p>&copy; 2025 Clover Education. All rights reserved.</p>
  </footer>
</body>
</html>
