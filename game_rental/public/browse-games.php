<?php require_once('../private/initialize.php'); ?>


<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Computer Games Rental</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" media="all" type="text/css" href="stylesheets/stylesheet.css" />
</head>

<body>

    <!-- navbar -->
    <div class="shadow-lg">
    <nav class="navbar navbar-expand-md navbar-light bg-faded shadow-lg">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="images/logo-header.png" width="380" height="98">
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
            <img src="images/header-right.jpg" width="380" height="98">
          </span>
        </ul>
      </div>
    </nav>
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="images/carousel/shadowofthetombraider-carousel.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="images/carousel/shadowofthetombraider-carousel.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="images/carousel/shadowofthetombraider-carousel.jpg" alt="Third slide">
                      </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>   
    
    <br/>
    <br/>
    <br/>
    
    <div class="container">
    <section>
    
        <?php
            $sql = "SELECT title, release_date, score, image FROM games";
            $result = mysqli_query($db, $sql);
            confirm_result_set($result);
            
            $num_rows = $result->num_rows;
            $count = 0;
            
            while($row = mysqli_fetch_assoc($result)) { 
                if ($count%3 == 0) {
                ?>
                    <div class="row">
                <?php
                }
                ?>
                    <div class="col-md-4 px-0 game">
                        <a href="game-example.php"><img src="<?php echo $row['image'] ?>" class="img-fluid"/></a>
                    </div>
                <?php
                if ($count%3 == 2) {
                ?>
                    </div>
                    
                    <br/>
                    <br/>
                    <br/>
                <?php
                }
                $count++;
            }
            
            mysqli_free_result($result);
        ?>
    </section>
    </div>
    <br/>
    <br/>
    <br/>


  </div>
<?php include(SHARED_PATH . '/footer.php'); ?>