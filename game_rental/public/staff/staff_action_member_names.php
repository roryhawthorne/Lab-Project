<?php require_once('../../private/initialize.php'); ?>

<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php $page_title = 'Member Names'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div class = "container">
        
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        <div class="row">
        <h1>List of members</h1>
        </div>

    <hr>
    <br>
    <br>


  	<table class="list">
    <tr>
    <td>email</td>
    </tr>
    <tr>
<?php 
    $sql = "SELECT * FROM members ORDER BY ASC";
    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_assoc($result)) 
    {
        ?>
        <td><?php echo $row['email']; ?></td>
        <?php
    }
 ?>
</tr>
</table>
  </div>
  <?php include(SHARED_PATH . '/footer.php'); ?>