<?php require_once('../private/initialize.php'); ?>


<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Game Page Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheets/stylesheet.css" type="text/css">
</head>

<body>

  <div class="container">

    <br/>
    <br/>
    <br/>

    <section>
        <div class="row">
          <div class="col-md-3"></div>
          <h1 class="col-md-6">Computer Game Society</h1>
          <div class="col-md-3"></div>
        </div>
    </section>

    <br/>
    <br/>
    <br/>
    
    <section>
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
                      <img class="d-block w-100" src="images/carousel/bfv-carousel.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/carousel/shadowofthetombraider-carousel.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/carousel/divinity2-carousel.jpg" alt="Third slide">
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
    </section>
    
    <br/>
    <br/>
    <br/>
    
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

    <br/>
    <br/>
    <br/>


  </div>
<?php include(SHARED_PATH . '/footer.php'); ?>