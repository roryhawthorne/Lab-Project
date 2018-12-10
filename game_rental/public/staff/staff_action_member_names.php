<?php require_once('../private/initialize.php'); ?>

<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php
$subject_set = find_all_subjects();
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
        <th>ID</th>
    </tr>
    <?php foreach($subjects as $subject){ ?>
        <tr>
          <td><?php echo h($subject['email']); ?></td>
        </tr>
      
    <?php } ?>
    </table>
    <?php
      mysqli_free_result($subject_set);
    ?>
  </div>
  <?php include(SHARED_PATH . '/members_footer.php'); ?>