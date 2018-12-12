<?php 
require_once('../private/initialize.php');

// Define variables and initialize with empty values
$fname = $lname = $email = $address = "";
$fname_err = $lname_err = $email_err = $address_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate fname 
    if (empty(trim($_POST['fname']))) {
        $fname_err = "Please enter a first name.";
    } else {
        $fname = trim($_POST['fname']);
    }
    
    // Validate lname
    if (empty(trim($_POST['lname']))) {
        $lname_err = "Please enter surname.";
    } else {
        $lname = trim($_POST['lname']);
    }
 
    // Validate username
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE email = ?";
        
        if ($stmt = mysqli_prepare($db, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already in use.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate emai
    if (empty(trim($_POST['address']))) {
        $address_err = "Please enter a valid address.";
    } else {
        $address = trim($_POST['address']);
    }
    
    
    // Check input errors before inserting in database
    if (empty($fname_err) && empty($lname_err) && empty($email_err) && empty($address_err)) {
        
        // Prepare an insert statement
        $sql = "INSERT INTO members (fname, lname, email, address) VALUES (?, ?, ?, ?)";
         
        if ($stmt = mysqli_prepare($db, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_fname, $param_lname, $param_email, $param_address);
            
            // Set parameters
            $param_fname = $fname;
            $param_lname = $lname;
            $param_email = $email;
            $param_address = $address;
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: staff-add-member-success.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
}
?>