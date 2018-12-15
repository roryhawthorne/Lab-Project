<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Computer Games Rental'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<?php 

    $view_only = "";
    $order_type = "";
    $sql = "SELECT id, title, platform, release_date, score, image FROM games WHERE stock > 0 ";
    
    if (isset($_GET['see-only'])) {
        
        $view_only = $_GET['see-only'];
        $sql .= " AND platform=";
        
        switch ($view_only) {
            case "all":
                $sql = substr($sql, 0, -14);
                break;
            case "xbox1":
                $sql .= "'Xbox One'";
                break;
            case "ps4":
                $sql .= "'PS4'";
                break;
            case "switch":
                $sql .= "'Switch'";
                break;
            case "pc":
                $sql .= "'PC'";
                break;
            default:
                $sql = substr($sql, 0, -14);
                break;
        }
    }
    
    if (isset($_GET['order-by'])) {
        $order_type = $_GET['order-by'];
        
        $sql .= " ORDER BY ";
        
        switch ($order_type) {
            case "def":
                $sql = substr($sql, 0, -10);
                break;
            case "alphabet":
                $sql .= "title ASC";
                break;
            case "alphabetdesc":
                $sql .= "title DESC";
                break;
            case "newestgames":
                $sql .= "release_date DESC";
                break;
            case "oldestgames":
                $sql .= "release_date ASC";
                break;
            default:
                $sql = substr($sql, 0, -10);
                break;
               
        }
    }
    
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);   




//    $sql = "SELECT id, title, release_date, score, image FROM games";
//    $result = mysqli_query($db, $sql);
//    confirm_result_set($result);
//            
//    $num_rows = $result->num_rows;
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
                          <a href="game-details.php?id=12"><img class="d-block w-100" src="images/carousel/shadowofthetombraider-carousel.jpg" alt="First slide"></a>
                      </div>
                      <div class="carousel-item">
                          <a href="game-details.php?id=1"><img class="d-block w-100" src="images/carousel/bfv-carousel.jpg" alt="Second slide"></a>
                      </div>
                      <div class="carousel-item">
                          <a href="game-details.php?id=10"><img class="d-block w-100" src="images/carousel/rdr2-carousel.jpg" alt="Third slide"></a>
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
                <a href="game-details.php?id=7"><img src="images/box-art/botw-switch.jpg" class="img-fluid shadow" style="border-radius: 1em;"/></a>
            </div>
            <div class="col-md-4 game">
                <a href="game-details.php?id=6"><img src="images/box-art/assassins-creed-odyssey-xbox1.jpg" class="img-fluid shadow" style="border-radius: 1em;"/></a>
            </div>
            <div class="col-md-4 game">
                <a href="game-details.php?id=8"><img src="images/box-art/god-of-war-ps4.jpg" class="img-fluid shadow" style="border-radius: 1em;"/></a>
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
    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;" >
        <a id="browse-games"></a>
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
                        <p><a href="index.php?see-only=<?php echo all ?>&order-by=<?php echo $order_type?>#browse-games">All Platforms</a></p>
                        <p><a href="index.php?see-only=<?php echo xbox1 ?>&order-by=<?php echo $order_type?>#browse-games">Xbox One</a></p>
                        <p><a href="index.php?see-only=<?php echo ps4 ?>&order-by=<?php echo $order_type?>#browse-games">PS4</a></p>
                        <p><a href="#">Nintendo Switch</a></p>
                        <p><a href="index.php?see-only=<?php echo pc ?>&order-by=<?php echo $order_type?>#browse-games">PC</a></p>
                    </div>
                    <br/>
                    <div>
                        <h3>Order By</h3>
                        <hr/>
                        <p><a href="index.php?see-only=<?php echo $view_only?>&order-by=<?php echo def ?>#browse-games">Default</a></p>
                        <p><a href="index.php?see-only=<?php echo $view_only?>&order-by=<?php echo alphabet ?>#browse-games">Alphabet</a></p>
                        <p><a href="index.php?see-only=<?php echo $view_only?>&order-by=<?php echo alphabetdesc ?>#browse-games">Reverse alphabet</a></p>
                        <p><a href="index.php?see-only=<?php echo $view_only?>&order-by=<?php echo newestgames ?>#browse-games">Newest release</a></p>
                        <p><a href="index.php?see-only=<?php echo $view_only?>&order-by=<?php echo oldestgames ?>#browse-games">Oldest release</a></p>
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