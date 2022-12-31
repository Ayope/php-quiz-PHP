<?php 
include_once "../classes/db.php";

function getQuestions(){
    $db = new DbConnect;
    $conn = $db->connect_pdo();

    $sql = "SELECT * FROM quiz";
    $sth = $conn->prepare($sql);
    $sth->execute();

    $data = array();
    while($row = $sth->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }

    echo json_encode($data);

}

getQuestions();