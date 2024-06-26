<?php
    session_start();

    if(!isset($_SESSION['name'])){
        header('location: ./view/account/login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <header >
        <div class="stepper-wrapper">
            <div class="stepper-item active">
                <div class="step-counter">1</div>
                <div class="step-name">Informations</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">2</div>
                <div class="step-name">Questionnaire</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">3</div>
                <div class="step-name">Résultat</div>
            </div>
        </div>

    </header>
  
    <main style="margin: 0px;">
        <div class="logo">
            <i class="uil uil-star" style="font-size: 200px; height: 180px;"></i>
            <h1>Welcome <?= $_SESSION['name'];?> to PHP Quiz</h1>
        </div>    
        
        <hr>

        <div class="rules">
            <h2 style="margin-bottom: 0px;">Rules:</h2>
            <ul>
                <li>Don't cheat!</li>
                <li>Every question takes 30 secondes!</li>
                <li>time done with no answer = wrong answer!</li>
            </ul>    
        </div>
        
        <div class="start">
            <a href="./view/quiz/page.php">
                <button class="startButton">START</button>
            </a>
        </div>

        
        <div>
            <a href="./script/logout.php"><i class="uil uil-sign-out-alt" style="font-size: 45px; position: absolute; top: 1px;"></i></a>
        </div>
    </main>    
    <!-- <script src="./assets/js/questions.js"></script> -->
    <script src="assets/js/main.js"></script>
</body>
</html>