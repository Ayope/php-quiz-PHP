<?php
include '../classes/db.php';

session_start();

if(isset($_SESSION['name'])){
    header('location: ../index.php');
}

function checkSignup(){

    $db = new DbConnect;
    $conn = $db->connect_pdo();
    
    if(isset($_POST['doSignup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT email FROM user WHERE email = '$email'";
        $prep = $conn->prepare($sql);
        $prep->execute();

        $count = $prep->rowCount();

        if($count != 0){
            echo "email already exist!";
        } else{
            $sql = "INSERT INTO user(name, email, password)
            VALUES ('$username','$email','$password')";
            $prep = $conn->prepare($sql);
            $prep->execute();

            echo "data is well inserted";
        }

    }
}

checkSignup();
