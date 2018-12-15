<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Add Rental'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>
<br/>
<br/>


<div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
    <div class="row">
        <h2 class"col-md-12" style="font-size: 3em; margin: auto;">Add rental</h2>
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
            <form class="form" action="<?php echo url_for('../private/scripts/add-rental.php'); ?>" method="post">
                <div class="row mt-5">
                    <div class="col-6 form-group">
                        <label for="sel1">Members:</label>
                        <select class="form-control" name ="members" style="font-family: Open Sans">
                            
                            <?php 
                            
                                $sql = "SELECT id, fname, lname FROM members WHERE is_banned=FALSE";
                                $not_banned = mysqli_query($db, $sql);
                                confirm_result_set($not_banned);
                                while($row = mysqli_fetch_assoc($not_banned)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"> <?php echo "" . $row['fname'] . " " . $row['lname']; ?> </option>
                            <?php 
                                }
                                mysqli_free_result($not_banned);
                            ?>
                        </select>
                        <input type = "submit" name = "member" value = "member" style ="display:none"/>
                    </div>
        
        
                    <div class="col-6 form-group">
                        <label for="sel1">Available Games:</label>
                        <select class="form-control" name ="games" style="font-family: Open Sans">
                            <?php 
                                $sql = "SELECT id, title, platform FROM games WHERE stock > 0 ORDER BY title ASC";
                                $all_games = mysqli_query($db, $sql);
                                confirm_result_set($all_games);
                                
                                while ($row = mysqli_fetch_assoc($all_games)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"> <?php echo "" . $row['title'] . " - " . $row['platform']; ?> </option>
                            <?php 
                                }
                                mysqli_free_result($all_games);
                            
                            ?>
                        </select>
                        <input type = "submit" name = "game" value = "game" style ="display:none"/>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <button class="mt-5 btn btn-lg btn-login" type="submit" name="Add Rental">Add Rental</button>
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