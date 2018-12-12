<?php 

// Include config file
require_once "../initialize.php";

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $id = $_POST['id'];
    $sql = "DELETE FROM members WHERE id=" . $id;
    mysqli_query($link, $sql);
    
    
    
    // Close connection
    mysqli_close($link);
    
    redirect_to("../../public/staff/staff-remove-member.php");
}

?>