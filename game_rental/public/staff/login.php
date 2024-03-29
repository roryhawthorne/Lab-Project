<?php require_once('../../private/initialize.php'); ?>


<?php

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: staff-portal.php");
    exit;
}
 
// Include config file
require_once "../../private/initialize.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["login-email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["login-email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["login-password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["login-password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM staff WHERE email = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: staff-portal.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Staff Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" media="all" type="text/css" href="<?php $css = PUBLIC_PATH . '/stylesheets/stylesheet.css';  echo substr($css, 9);?>" />
</head>

<body style="overflow-y: scroll; overflow-x:hidden; background-color: #e7e7e7;">


    <!-- navbar -->
    <div class="shadow-lg">
        <nav class="navbar navbar-expand-md navbar-light bg-faded shadow-lg">
          <a class="navbar-brand" href="<?php $path = PUBLIC_PATH . '/index.php'; echo substr($path, 9);?>">
            <img src="../images/logo-header.png" width="380" height="98">
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin: auto;">
              <li class="nav-item" >
                <a class="nav-link" href="javascript:void(0)">XBOX ONE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">PS4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">SWITCH</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <span class="navbar-brand" href="javascript:void(0)">
                <img src="../images/header-right.jpg" width="380" height="98">
              </span>
            </ul>
          </div>
        </nav>
    </div>

  <div class="container jumbotron">
  
    <div class="row ">
      <div class="col-4"></div>
      <div class="col jumbotron shadow">
      
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
              
                <label for="exampleInputEmail1">Email address</label>
                <input name="login-email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
                
            </div>
          
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
          
                <label for="exampleInputPassword1">Password</label>
                <input name="login-password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                <span class="help-block"><?php echo $password_err; ?></span>
            
            </div>
          
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
        
      </div>
      <div class="col-4"></div>
    </div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<?php
  db_disconnect($db);
?>