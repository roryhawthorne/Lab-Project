<?php
  if(!isset($page_title)) { $page_title = 'Members Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Games - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/stylesheet.css'); ?>" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" >
      <img src="images/home.png" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Games By Title</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Platform</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Release Year</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Genre</a>
        </li>
      </ul>
      <ul class="nav pull-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:rgba(255,255,255,.5);">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Homepage</a>
            <a class="dropdown-item" href="#">Details</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../../private/scripts/logout.php">Logout</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>