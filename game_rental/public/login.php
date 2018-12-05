<?php require_once('../private/initialize.php'); ?>


<?php

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: game-example.php");
    exit;
}
 
// Include config file
require_once "../private/initialize.php";
 
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
        $sql = "SELECT id, email, password FROM members WHERE email = ?";
        
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
                            header("location: game-example.php");
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
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheets/stylesheet.css" type="text/css">
</head>

<body>
  <div class="container jumbotron">
  
    <div class="row">
      <div class="col-4"></div>
      <div class="col jumbotron">
      
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
            <br/>
            <p>Dont have an account? </p>
            <a href="sign-up.php" class="btn btn-default">Sign up now</a>
        </form>
        
      </div>
      <div class="col-4"></div>
    </div>

  </div>

<?php include(SHARED_PATH . '/footer.php'); ?>