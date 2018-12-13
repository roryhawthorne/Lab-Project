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
    $id = $_POST['id'];
    $banned = $_POST['banned'];
    
    $sql = "";
    
    if ($_POST['banned'] == 1){
        $sql = "UPDATE members SET is_banned=FALSE WHERE id=" . $id;
    } else {
        $sql = "UPDATE members SET is_banned=TRUE WHERE id=" . $id;
    }
    
    $result = mysqli_query($link, $sql);
   
    // Close connection
    mysqli_close($link);
    
    redirect_to("../../public/staff/staff-ban.php");
}
?>

