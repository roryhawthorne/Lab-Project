
<?php
// Include config file
require_once "../../private/initialize.php";
 
// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM staff WHERE email = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already in use.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO staff (email, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            
            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
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


<?php $page_title = 'Portal'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>
  <div class="col">

    <div class="row">
    
      <div class="col-4"></div>
      
      <div class="col jumbotron">
      
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class ="from-group">
            <label for="exampleInputName1"> First Name</label>
            <br>
            <input type="name" class="from-control" id="exampleInputName1" placeholder="Enter your first name">
          </div>
          <div class ="from-group">
            <label for="exampleInputSurname1">Last Name</label>
            <br>
            <input type="surname" class="from-control" id="exampleInputSurname1" placeholder="Enter your family name">
          </div>

          <br>
          
          <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
            <span class="help-block"><?php echo $email_err; ?>
          </div>
          
          <div lass="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $password; ?>">
            <span class="help-block"><?php echo $password_err; ?>
          </div>
          
          <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label for="exampleConfirmPassword1" >Confirm password</label>
            <input type="password" class="form-control" id="exampleConfirmPassword1" placeholder="Re-enter your password" name="confirm_password" value="<?php echo $confirm_password; ?>">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
          </div>

          <br>
          
          <div class="form-group">
            <label for="exampleInputCardHolderName1">Cardholder Name</label>
            <input type="cardName" class="form-control" id="exampleInputCardHolderName1" placeholder="Enter the name on the card">
          </div>
          
          <div class="form-group">
            <label for="exampleInputCardNumber1">Card Number</label>
            <input type="number" class="form-control" maxlenght="16" id="exampleInputCardNumber1"  placeholder="The 16 digit card number">
          </div>
          
          <div class="form-group">
            <label for="exampleInputExpiryDate1">Expiry Date</label>
            <input type="month" class="form-control" id="exampleInputExpiryDate1" placeholder="month">
          </div>

          <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
        
      </div>
      
      <div class="col-4"></div>
    </div>

  </div>
  
<?php include(SHARED_PATH . '/footer.php'); ?>