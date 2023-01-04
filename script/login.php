<?php

include '../classes/db.php';

session_start();

if(isset($_SESSION['name'])){
    header('location: ../index.php');
}

function checkLogin(){

    $db = new DbConnect;
    $conn = $db->connect_pdo();
    
    if(isset($_POST['doLogin'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT name, email, password FROM user WHERE email = '$email' and password = '$password'";
        $prep = $conn->prepare($sql);
        $prep->execute();

        $count = $prep->rowCount();

        if($count != 0){
            $row = $prep->fetch(); 
            $_SESSION['name'] = $row['name'];            
            header("Location: ../index.php");
        }
    }
}

checkLogin();
