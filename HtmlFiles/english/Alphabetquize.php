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
    <title>Alphabet Quiz - Clover Education</title>
    <link href="/Clover/HtmlFiles/src/output.css" rel="stylesheet">
    <style>
        .custom-radio input:checked + span {
            background-color: #8B5CF6;
            color: white;
        }
        .correct-answer {
            background-color: #10B981 !important;
            color: white !important;
        }
        .incorrect-answer {
            background-color: #EF4444 !important;
            color: white !important;
        }
    </style>
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
            <h1 class="text-5xl font-black text-purple-700 mb-4 tracking-wider bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                &#x1F4DA; Alphabet Quiz
            </h1>
            <p class="text-xl text-gray-700">Test your knowledge of the alphabet!</p>
        </div>

        <form id="quizForm" class="w-full max-w-2xl mx-auto bg-white p-8 rounded-3xl shadow-xl">
            <!-- Question 1 -->
            <div class="mb-8 p-6 bg-purple-50 rounded-2xl transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <img src="/Clover/HtmlFiles/images/apple.png" alt="Apple" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <p class="text-lg font-semibold text-center text-purple-700 mb-4">1. What letter does this word start with?</p>
                <div class="flex justify-center gap-6">
                    <label class="custom-radio">
                        <input type="radio" name="q1" value="B" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">B</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q1" value="A" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">A</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q1" value="C" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">C</span>
                    </label>
                </div>
                <div class="mt-4 text-center text-green-600 font-medium answer-feedback hidden">Correct! Apple starts with A.</div>
            </div>

            <!-- Question 2 -->
            <div class="mb-8 p-6 bg-purple-50 rounded-2xl transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <img src="/Clover/HtmlFiles/images/ball.png" alt="Ball" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <p class="text-lg font-semibold text-center text-purple-700 mb-4">2. What letter does this word start with?</p>
                <div class="flex justify-center gap-6">
                    <label class="custom-radio">
                        <input type="radio" name="q2" value="D" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">D</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q2" value="B" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">B</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q2" value="E" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">E</span>
                    </label>
                </div>
                <div class="mt-4 text-center text-green-600 font-medium answer-feedback hidden">Correct! Ball starts with B.</div>
            </div>

            <!-- Question 3 -->
            <div class="mb-8 p-6 bg-purple-50 rounded-2xl transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <img src="/Clover/HtmlFiles/images/cat.png" alt="Cat" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <p class="text-lg font-semibold text-center text-purple-700 mb-4">3. What letter does this word start with?</p>
                <div class="flex justify-center gap-6">
                    <label class="custom-radio">
                        <input type="radio" name="q3" value="C" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">C</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q3" value="F" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">F</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q3" value="G" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">G</span>
                    </label>
                </div>
                <div class="mt-4 text-center text-green-600 font-medium answer-feedback hidden">Correct! Cat starts with C.</div>
            </div>

            <!-- Question 4 -->
            <div class="mb-8 p-6 bg-purple-50 rounded-2xl transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <img src="/Clover/HtmlFiles/images/dog.png" alt="Dog" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <p class="text-lg font-semibold text-center text-purple-700 mb-4">4. What letter does this word start with?</p>
                <div class="flex justify-center gap-6">
                    <label class="custom-radio">
                        <input type="radio" name="q4" value="H" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">H</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q4" value="I" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">I</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q4" value="D" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">D</span>
                    </label>
                </div>
                <div class="mt-4 text-center text-green-600 font-medium answer-feedback hidden">Correct! Dog starts with D.</div>
            </div>

            <!-- Question 5 -->
            <div class="mb-8 p-6 bg-purple-50 rounded-2xl transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <img src="/Clover/HtmlFiles/images/elephant.png" alt="Elephant" class="w-32 h-32 mx-auto mb-4 transform hover:scale-110 transition-transform duration-300">
                <p class="text-lg font-semibold text-center text-purple-700 mb-4">5. What letter does this word start with?</p>
                <div class="flex justify-center gap-6">
                    <label class="custom-radio">
                        <input type="radio" name="q5" value="E" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">E</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q5" value="I" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">I</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="q5" value="K" class="hidden">
                        <span class="px-6 py-3 bg-white rounded-xl shadow-md hover:bg-purple-100 transition-all duration-300 cursor-pointer">K</span>
                    </label>
                </div>
                <div class="mt-4 text-center text-green-600 font-medium answer-feedback hidden">Correct! Elephant starts with E.</div>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-4 rounded-xl font-medium text-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    Submit Quiz
                </button>
                <button type="button" id="tryAgainBtn" class="hidden bg-gradient-to-r from-green-600 to-green-700 text-white px-8 py-4 rounded-xl font-medium text-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl ml-4">
                    Try Again
                </button>
            </div>
        </form>
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
        document.getElementById('quizForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show all answer feedbacks and highlight answers
            const questions = [
                { correct: 'A', element: 'q1' },
                { correct: 'B', element: 'q2' },
                { correct: 'C', element: 'q3' },
                { correct: 'D', element: 'q4' },
                { correct: 'E', element: 'q5' }
            ];

            questions.forEach((question, index) => {
                const selectedAnswer = document.querySelector(`input[name="q${index + 1}"]:checked`);
                const allOptions = document.querySelectorAll(`input[name="q${index + 1}"]`);
                
                allOptions.forEach(option => {
                    const span = option.nextElementSibling;
                    if (option.value === question.correct) {
                        span.classList.add('correct-answer');
                    } else if (selectedAnswer && option.value === selectedAnswer.value && option.value !== question.correct) {
                        span.classList.add('incorrect-answer');
                    }
                });

                const feedback = document.querySelectorAll('.answer-feedback')[index];
                feedback.classList.remove('hidden');
            });

            // Show the try again button
            document.getElementById('tryAgainBtn').classList.remove('hidden');
        });

        // Add event listener for try again button
        document.getElementById('tryAgainBtn').addEventListener('click', function() {
            // Reset all radio buttons
            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.checked = false;
            });

            // Remove all answer feedback classes
            document.querySelectorAll('.answer-feedback').forEach(feedback => {
                feedback.classList.add('hidden');
            });

            // Remove all correct/incorrect answer highlights
            document.querySelectorAll('span').forEach(span => {
                span.classList.remove('correct-answer', 'incorrect-answer');
            });

            // Hide the try again button
            this.classList.add('hidden');
        });

        // Add event listeners to radio buttons for immediate feedback
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const allSpans = document.querySelectorAll(`input[name="${this.name}"] + span`);
                allSpans.forEach(span => {
                    span.classList.remove('correct-answer', 'incorrect-answer');
                });
            });
        });
    </script>
</body>
</html>
