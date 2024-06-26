<?php 
    session_start();

    if(!isset($_SESSION['name'])){
        header('location: ../account/login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz</title>
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
<body>
    <div>
        <a href="../../script/logout.php"><i class="uil uil-sign-out-alt" style="font-size: 45px; position: absolute; top: 1px;"></i></a>
    </div>
    
    <div class="prog-bar" id="progessBar">
    </div>

    <header>
        <div class="stepper-wrapper">
            <div class="stepper-item completed">
                <div class="step-counter">1</div>
                <div class="step-name">Informations</div>
            </div>
            <div class="stepper-item active" id="progress2bar">
                <div class="step-counter">2</div>
                <div class="step-name">Questionnaire</div>
            </div>
            <div class="stepper-item"  id="progress3bar">
                <div class="step-counter">3</div>
                <div class="step-name">Résultat</div>
            </div>
        </div>
    </header>

    <main id="main" >
        
        <div class="position">
            <div class="border">
                <div class="timer" id="timer">
                    
                </div>
            </div>
        </div>

        <div class="question" id="question">
            <h4>Question <span id="questNum"></span></h4>
            <p id="quest"></p>
        </div>

        <hr style="width:60%; background-color: #ccc; height: 1px; border: none;">

        <div class="answers">
            <div class="answer" value="1" id="ans1" onclick="next(this);"></div>
            <div class="answer" value="2" id="ans2" onclick="next(this);"></div>
            <div class="answer" value="3" id="ans3" onclick="next(this);"></div>
            <div class="answer" value="4" id="ans4" onclick="next(this);"></div>
        </div> 

    </main>


    <div class="score1" id="score1">
        <div class="logo1">
            <i class="uil uil-star" style="font-size: 200px; height: 180px; margin-left:90px;"></i>
            <h1 style="margin:0"><?= strtoupper($_SESSION['name']);?> YOUR SCORE IS:</h1>
        </div>    
        
        <div class="scoreNum" id="scoreNum">

        </div>
        
        <div class="retry">
            <button class="retryButton" onclick="repeat()">
                RETRY
            </button>
        </div>
    </div>

    <!-- <script src="../../assets/js/questions.js"></script> -->
    <script src="../../assets/js/main.js"></script>
</body>
</html>