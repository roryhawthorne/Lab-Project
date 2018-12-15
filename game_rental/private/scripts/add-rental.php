<?php
// Include config file
require_once "../initialize.php";

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member_id = $_POST['members'];
    $game_id = $_POST['games'];
    $period = 2;
    $start_date = date("Y-m-d");
    $due = date("Y-m-d", strtotime('+' . $period .  " week", strtotime($start_date)));
    
    $sql = "INSERT INTO rentals (member_id, game_id, due_date) VALUES (" . $member_id . ", " . $game_id . ", \"" . $due . "\")";
    $result = mysqli_query($db, $sql);
    
    $sql = "UPDATE games SET stock = stock - 1 WHERE id = " . $game_id;
    $result2 = mysqli_query($db, $sql);
    
    mysqli_close($link);
        
    redirect_to("../../public/staff/staff-add-rental-success.php");
}

?>