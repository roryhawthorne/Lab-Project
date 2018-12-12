<?php 
require_once('../../private/initialize.php');

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

<?php $page_title = 'Portal'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>


    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
         <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">add new member</h2>
        </div>
        <div class="row">
            <br/>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: #973686; height: 3px;"></div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <br/>
            <br/>
        </div>
        <div class="row">
            <div class="col-md-12" style="font-family: arial;">
            
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                    <div class ="from-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
                        <label for="inputName">First Name</label>
                        <input class="form-control" type="text" id="inputName" placeholder="Enter member first name" name="fname" value="<?php echo $fname; ?>"/>
                        <span class="help-block"><?php echo $fname_error; ?>
                        <br>
                    </div>
                    
                    <div class ="from-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
                        <label for="inputSurname">Last Name</label>
                        <input class="form-control" type="text" id="inputName" placeholder="Enter member surname" name="lname" value="<?php echo $lname; ?>"/>
                        <span class="help-block"><?php echo $lname_error; ?>
                        <br>
                    </div>
                    
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
                        <span class="help-block"><?php echo $email_err; ?>
                    </div>
                    
                    <div class ="from-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                        <label for="inputAddress">Address</label>
                        <input class="form-control" type="text" id="inputAddress" placeholder="Enter address" name="address" value="<?php echo $address; ?>"/>
                        <span class="help-block"><?php echo $address_error; ?>
                        <br>
                    </div>
                    
                    <br>
                    
                    <button type="submit" class="btn col-md-12 filter-btn shadow">add this member</button>
                </form>
                
            </div>
        </div>
    </div>
        
<br/>
<br/>
<br/>

<?php include(SHARED_PATH . '/footer.php'); ?>