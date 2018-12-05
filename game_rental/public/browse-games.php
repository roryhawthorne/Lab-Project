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

    <div class="row">
      <div class="col-md-3"></div>
      <h1 class="col-md-6">Computer Game Society</h1>
      <div class="col-md-3"></div>
    </div>

    <br/>
    <br/>
    <br/>
    
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


  </div>
<?php include(SHARED_PATH . '/footer.php'); ?>