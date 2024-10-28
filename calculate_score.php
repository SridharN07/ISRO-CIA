<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    // Define the correct answers
    /*$correct_answers = [
        'q1' => 'Mars',
        'q2' => 'Jupiter',
        'q3' => 'Milky Way',
        'q4' => 'Sun',
        'q5' => 'Saturn',
        'q6' => 'Sputnik 1',
        'q7' => 'Saturn',
        'q8' => 'Venus',
        'q9' => 'Venus',
        'q10' => 'Hubble',
        'q11' => 'Yuri Gagarin',
        'q12' => 'Jupiter',
        'q13' => 'Apollo 12',
        'q14' => 'Venus',
        'q15' => 'Sojourner',
        'q16' => 'To search for past life',
        'q17' => 'Opportunity',
        'q18' => 'Nuclear Battery',
        'q19' => '2004',
        'q20' => 'Oppurtunity'
    ];

    $score = 0;
    $total_questions = count($correct_answers);

    // Loop through the user's answers and compare them with the correct answers
    foreach ($correct_answers as $question => $correct_answer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
            $score++;
        }
    }

    */

    $questions = array('q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20');
    $correct_answers = array('Mars', 'Jupiter', 'Milky Way', 'Sun', 'Saturn', 'Sputnik 1', 'Saturn', 'Venus', 'Venus', 'Hubble', 'Yuri Gagarin', 'Jupiter', 'Apollo 12', 'Venus', 'Sojourner', 'To search for past life', 'Opportunity', 'Nuclear Battery', '2004', 'Oppurtunity');

    $score = 0;
    $total_questions = count($correct_answers);

    // Loop through the user's answers and compare them with the correct answers
    for ($i = 0; $i < $total_questions; $i++) {
        if (isset($_POST[$questions[$i]]) && $_POST[$questions[$i]] == $correct_answers[$i]) {
            $score++;
        }
    }

    // Calculate the percentage score
    $percentage = ($score / $total_questions) * 100;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="/Styles/animation.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
        }

        .result-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            background-color: #212121;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #007BFF;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: yellow;
        }

        p {
            font-size: 20px;
            margin-bottom: 10px;
            color: yellow;
        }

        .score {
            font-size: 22px;
            color: #28a745;
            margin-bottom: 15px;
        }

        .feedback {
            font-size: 20px;
            color: #007BFF;
            margin-top: 20px;
        }

        .retry-button {
            display: inline-block;
            margin-top: 20px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            margin: 10px;
            background-color: #f64137;
            padding: 15px 10%;
            padding-top: 19px;
            font-weight: bold;
            font-size: 16px;
            color: #ffffff;
            border: none;
        }

        .retry-button:hover {
            opacity: 0.8;
        }

        img {
            width: 60px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        @media print {
            body {
                background-color: #000000 !important;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }

            .retry-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="result-container">
    <img id="logo" class="logo" src="./Styles/Images/Logos/ISRO.png">
    <h1>Certificate of Completion</h1>
        <h2>Congratulations, <span class="username"><?php echo $username; ?></span>!</h2>
        <p>You completed the Space Quiz.</p>
        <p class="score">Your Score: <?php echo $score; ?> / <?php echo $total_questions; ?> (<?php echo number_format($percentage, 2); ?>%)</p>

        <?php
        // Provide feedback based on score
        if ($percentage >= 80) {
            echo '<p class="feedback">Excellent! You really know your space facts! </p>';
        } elseif ($percentage >= 50) {
            echo '<p class="feedback">Good job! You have a decent knowledge of space.</p>';
        } else {
            echo '<p class="feedback">Keep learning! There\'s always more to discover about the universe.</p>';
        }
        ?>

        <!-- Retry Button -->
        <a href="./quiz.html" class="retry-button">Try Again</a>
        <button onclick="window.print()" class="retry-button">Print</button>
    </div>
</body>
</html>
