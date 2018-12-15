<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Return Rental'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>
<?php 
    $sql = "SELECT rentals.id AS rental_id, rentals.due_date, members.fname, members.lname, members.id AS member_id, games.title, games.id AS game_id FROM members JOIN rentals ON members.id=rentals.member_id JOIN games ON rentals.game_id=games.id";
    $not_banned = mysqli_query($db, $sql);
    confirm_result_set($not_banned);
?>

<br/>
<br/>
<br/>
<br/>
<br/>


<div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
    <div class="row">
        <h2 class"col-md-12" style="font-size: 3em; margin: auto;">return rental</h2>
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
        <div class="col-md-12">
            <form class="form" action="<?php echo url_for('../private/scripts/return-rental.php'); ?>" method="post">
                <div class="row mt-5">
                    <div class="col-12 form-group">
                        <label for="sel1">Members:</label>
                        
                        <select class="form-control" name ="rentals" style="font-family: Open Sans">
                            
                            <?php 
                                while($row = mysqli_fetch_assoc($not_banned)) {
                            ?>
                                <option value="<?php echo $row['rental_id']; ?>|<?php echo $row['game_id']; ?>"> <?php echo "" . $row['fname'] . " " . $row['lname'] . " - " . $row['title']; ?> </option>
                            <?php 
                                }
                                mysqli_free_result($not_banned);
                            ?>
                        </select>
                        <input type = "submit" name = "member" value = "member" style ="display:none"/>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="mt-5 btn btn-lg btn-login" type="submit" name="Add Rental">Return This Rental</button>
                        </div>
                    </div>
                </div>
                
                
            </form>
        </div>
    </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>

<?php include(SHARED_PATH . '/footer.php'); ?>