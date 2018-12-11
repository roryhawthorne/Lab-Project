<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Computer Games Rental'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<?php 
    $sql = "SELECT id, title, release_date, score, image FROM games";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
            
    $num_rows = $result->num_rows;
?>

    <!-- carousel -->
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
                          <a href="#"><img class="d-block w-100" src="images/carousel/shadowofthetombraider-carousel.jpg" alt="First slide"></a>
                      </div>
                      <div class="carousel-item">
                          <a href="#"><img class="d-block w-100" src="images/carousel/bfv-carousel.jpg" alt="Second slide"></a>
                      </div>
                      <div class="carousel-item">
                          <a href="#"><img class="d-block w-100" src="images/carousel/rdr2-carousel.jpg" alt="Third slide"></a>
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
    
    <!-- featured games -->
    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">FEATURED GAMES</h2>
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
        <div class="row" style="margin: auto;">
            <div class="col-md-4 game" >
                <a href="#"><img src="images/box-art/bfv.jpg" class="img-fluid shadow" style="border-radius: 1em;"/></a>
            </div>
            <div class="col-md-4 game">
                <a href="#"><img src="images/box-art/bfv.jpg" class="img-fluid shadow" style="border-radius: 1em;"/></a>
            </div>
            <div class="col-md-4 game">
                <a href="#"><img src="images/box-art/bfv.jpg" class="img-fluid shadow" style="border-radius: 1em;"/></a>
            </div>
        </div>
        <div class="row">
            <br/>
            <br/>
        </div>
    </div>
    
    <br/>
    <br/>
    <br/>
    
    <!-- all games -->
    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">BROWSE ALL GAMES</h2>
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
            <button class="btn col-md-12 filter-btn shadow" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                FILTER
            </button>
            <div class="collapse" id="collapseExample" style="width: 100%;">
                <br/>
                <div class="card card-body">
                    <div>
                        <h3>Platform</h3>
                        <hr/>
                        <p><a href="#">Xbox One</a></p>
                        <p><a href="#">PS4</a></p>
                        <p><a href="#">Nintendo Switch</a></p>
                    </div>
                    <br/>
                    <div>
                        <h3>Order By</h3>
                        <hr/>
                        <p><a href="#">Alphabet</a></p>
                        <p><a href="#">Reverse alphabet</a></p>
                        <p><a href="#">Newest release</a></p>
                        <p><a href="#">Oldest release</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <br/>
            <br/>
        </div>

    
        <?php
            $count = 0;
            
            while($row = mysqli_fetch_assoc($result)) { 
                if ($count%3 == 0) {
                ?>
                    <div class="row">
                <?php
                }
                ?>
                    <div class="col-md-4 game">
                        <a href="game-details.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" class="img-fluid shadow" style="border-radius: 1em;"/></a>
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
    </div>
    </div>
    
    <div class="container">
        <div class="row">
            <br/>
            <br/>
            <br/>
        </div>
    </div>
    
<?php include(SHARED_PATH . '/footer.php'); ?>