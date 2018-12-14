<?php
    if(!isset($page_title)) { $page_title = 'Games'; }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title><?php echo h($page_title); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" media="all" type="text/css" href="<?php echo url_for('/stylesheets/stylesheet.css') ?>" />
</head>

<body style="overflow-y: scroll; overflow-x:hidden; background-color: #e7e7e7;">


    <!-- navbar -->
    <div class="shadow-lg">
        <nav class="navbar navbar-expand-md navbar-light bg-faded shadow-lg">
          <a class="navbar-brand" href="<?php $path = PUBLIC_PATH . '/index.php'; echo substr($path, 9);?>">
            <img src="images/logo-header.png" width="380" height="98">
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin: auto;">
              <li class="nav-item" >
                <a class="nav-link" name="browse-games" href="index.php?see-only=<?php echo xbox1 ?>&order-by=<?php echo $order_type?>">XBOX ONE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" name="browse-games" href="index.php?see-only=<?php echo ps4 ?>&order-by=<?php echo $order_type?>">PS4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" name="browse-games" href="#">SWITCH</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <span class="navbar-brand" href="javascript:void(0)">
                <img src="images/header-right.jpg" width="380" height="98">
              </span>
            </ul>
          </div>
        </nav>
    </div>
    