<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect them to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title> Staff - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <meta name ="viewport" content ="width=device-width", "initial-scale=1.0", "shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/stylesheet.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-lg">
      <a class="navbar-brand" href="<?php echo url_for('/index.php'); ?>" >
        <img src="images/logo-header.png" width="380" height="98">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Members
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo url_for('/staff/staff-view-all-members.php?see-only=all&order-by=default'); ?>">View All</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo url_for('/staff/staff-add-remove-member.php'); ?>">Add/Remove</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo url_for('/staff/staff-refunds.php'); ?>">Refunds required</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo url_for('/staff/staff-ban.php'); ?>">Banned members</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo url_for('/staff/staff-due-games.php'); ?>">Due Games</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Manage extensions</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Overdue Items</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Secretary abilities
            </a>
            <div class ="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class = "dropdown-item" href="#">change rules</a>
              <div class="dropdown-divider"></div>
              <a class = "dropdown-item" href="#">Manage access rights</a>
              <div class="dropdown-divider"></div>
              <a class = "dropdown-item" href="sign-up.php">Add new staff member</a>
            </div>
          </li>

        </ul>
        <ul class="nav pull-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:rgba(255,255,255,.5);">
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo url_for('/staff/staff-portal.php'); ?>">Homepage</a>
              <a class="dropdown-item" href="#">Details</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../../private/scripts/logout.php">Logout</a>
            </div>
          </li>
        </ul>

      </div>
    </nav>
