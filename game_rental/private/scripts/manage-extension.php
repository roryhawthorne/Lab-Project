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
    $id = $_POST['rental_id'];
    $due_date = $_POST['due_date'];
    
    $start_date = $due_date;
    $period = 2;
    
    $extension = $_POST['has_extension'];
    
    $sql = "";
    
    if ($_POST['has_extension'] == 1){
        $unextended_date = date("Y-m-d", strtotime('-' . $period .  " week", strtotime($start_date)));
        $sql = "UPDATE rentals SET has_extension=FALSE, due_date='" . $unextended_date . "' WHERE id=" . $id;
    } else {
        $extended_date = date("Y-m-d", strtotime('+' . $period .  " week", strtotime($start_date)));
        echo $extended_date;
        $sql = "UPDATE rentals SET has_extension=TRUE, due_date='" . $extended_date . "' WHERE id=" . $id;
    }
    
    $result = mysqli_query($link, $sql);
   
    // Close connection
    mysqli_close($link);
    
    redirect_to("../../public/staff/staff-manage-extensions.php");
}

?>