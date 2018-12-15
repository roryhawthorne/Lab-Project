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
    $values = $_POST['rentals'];
    $result_explode = explode('|', $values);
    
    $rental_id = (int)$result_explode[0];
    $game_id = (int)$result_explode[1];
    
    $sql = "DELETE FROM rentals WHERE id=" . $rental_id;
    $result = mysqli_query($db, $sql);
    
    $sql = "UPDATE games SET stock = stock + 1 WHERE id=" . $game_id;
    $result2 = mysqli_query($db, $sql);
    
    mysqli_close($link);
        
    redirect_to("../../public/staff/staff-return-rental-success.php");
}
?>