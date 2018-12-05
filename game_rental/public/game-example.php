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

<?php $page_title = 'Red Dead Redemption 2'; ?>
<?php include(SHARED_PATH . '/members_header.php'); ?>

  <div class="container">

    <br>
    <br>
    <br>

    <div class="row">
      <h1>Red Dead Redemtion 2 - PS4</h1>
    </div>

    <hr>
    <br>
    <br>

    <div class="row">
      <div class="col-4">
        <img src="images/game-box-art.png" width="100%">
      </div>
      <div class="col-8">
        <div>
          <p>
            Red Dead Redemption 2 is a Western-themed action-adventure game set in an open world environment. It is played from either a third or first-person perspective and the player controls Arthur Morgan, an outlaw and a member of the Van der Linde gang. The game features both single-player and online multiplayer components.
          </p>
          <p>
            The game brings back and deeply refines mechanics from the previous game, such as the combat, gunplay, honor system and more. It also has many new features, including dual-wielding and swimming.
          </p>
        </div>
        <br>
        <br>
        <dl class="row">
          <dt class="col-sm-3">Release Date:</dt>
          <dd class="col-sm-9">26 October 2018</dd>

          <dt class="col-sm-3">Platform: </dt>
          <dd class="col-sm-9">PS4</dd>

          <dt class="col-sm-3">Review Score: </dt>
          <dd class="col-sm-9">97/100</dd>
        </dl>

      </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row">
      <button type="button" class="btn btn-dark col-8 col-centered">
        RENT THIS GAME
      </button>
    </div>

    <br>
    <hr>
    <br>

    <div class="row">
      <h2>Reviews</h2>
    </div>
    <div class="row">
      <div class="col-4">
        <p>Played all Rockstar games since 2004, GTA, LA NOIRE, RED REVOLVER, RDR, Max Payn, and the RDR2 is the climax of rockstars' expertise in story telling, graphics and open world's management. Thank you !</p>
      </div>
      <div class="col-4">
        <p>Amazing game, simply amazing! From the immersion, to the world building, to the writing, this game is fantastic!</p>
      </div>
      <div class="col-4">
        <p>Don't know why all the hate but this game is fantastic, it really draws you in. The controls are clunky on purpose giving you that western feel. Absolutely love it!</p>
      </div>
    </div>

  </div>

<?php include(SHARED_PATH . '/footer.php'); ?>

