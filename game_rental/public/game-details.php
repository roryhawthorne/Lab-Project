<?php require_once('../private/initialize.php'); ?>


<?php  
    if(isset($_GET['id'])){
        $game_id = $_GET['id']; //some_value
    } 
    
    $sql = "SELECT * FROM games WHERE id=$game_id";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    
    $row = mysqli_fetch_assoc($result);
?>

<?php $page_title = $row['title']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

  <div class="container" style="height: 4em;">
    <div class="row">
    </div>
  </div>

  <div class="container" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">

    <div class="row">
      <div class="col"></div>
      <h1 class="game-details-title col-md-6" style="text-align: center;"><?php echo $row['title'] ?></h1>
      <div class="col"></div>
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
      <div class="col-4">
        <img src="<?php echo $row['image']?>" width="100%" class="shadow" style="border-radius: 1em;">
      </div>
      <div class="col-8">
        <div>
          <p class="game-details-text">
            <?php echo $row['description']?>
          </p>
        </div>
        <br>
        <br>
        <dl class="row">
          <dt class="col-sm-3">Release Date:</dt>
          <dd class="col-sm-9 game-details-text"><?php echo $row['release_date']; ?></dd>

          <dt class="col-sm-3">Platform: </dt>
          <dd class="col-sm-9 game-details-text"><?php echo $row['platform']; ?></dd>

          <dt class="col-sm-3">Review Score: </dt>
          <dd class="col-sm-9 game-details-text"><?php echo $row['score']; ?>/100</dd>
        </dl>

      </div>
    </div>
    
    <div class="row">
        <br/>
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
      <div class="col"></div>
      <h2 class="col-md-6" style="text-align: center;">Reviews</h2>
      <div class="col"></div>
    </div>
    <div class="row">
        <br/>
    </div>
    <div class="row">
      <div class="col-4">
        <p class="game-details-text">Played all Rockstar games since 2004, GTA, LA NOIRE, RED REVOLVER, RDR, Max Payn, and the RDR2 is the climax of rockstars' expertise in story telling, graphics and open world's management. Thank you !</p>
      </div>
      <div class="col-4">
        <p class="game-details-text">Amazing game, simply amazing! From the immersion, to the world building, to the writing, this game is fantastic!</p>
      </div>
      <div class="col-4">
        <p class="game-details-text">Don't know why all the hate but this game is fantastic, it really draws you in. The controls are clunky on purpose giving you that western feel. Absolutely love it!</p>
      </div>
    </div>

  </div>
 
<br/>
<br/>
<br/>

<?php include(SHARED_PATH . '/footer.php'); ?>

