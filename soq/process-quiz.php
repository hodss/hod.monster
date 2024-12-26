<?php
// process-quiz.php

// Define correct answers
$correctAnswers = [
    'question1' => 'C',
    'question2' => 'B'
];

// Initialize score
$score = 0;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Loop through each question and check the answer
    foreach ($correctAnswers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
            $score++;
        }
    }
}

// Calculate total questions
$totalQuestions = count($correctAnswers);

// Display results
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Results</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="quiz-container">
    <h1>Quiz Results</h1>
    <p>You scored <?php echo $score; ?> out of <?php echo $totalQuestions; ?>.</p>
    <a href="index.html">Take the Quiz Again</a>
  </div>
</body>
</html>
