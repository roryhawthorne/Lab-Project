<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Games Due Soon'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>

    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">Due Games</h2>
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
            <br/>
            <br/>
        </div>
        <div class="row">
            <table class="table" style="font-family: arial;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Game</th>
                        <th scope="col">Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT rentals.id AS rental_id, rentals.due_date, members.fname, members.lname, members.id AS member_id, games.title FROM members JOIN rentals ON members.id=rentals.member_id JOIN games ON rentals.game_id=games.id AND rentals.due_date<CURRENT_TIMESTAMP";
                        $result = mysqli_query($db, $sql);
                        confirm_result_set($result);
                        
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <tr>
                            <th scope="row"><?php echo $row['rental_id'] ?></th>
                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['lname'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['due_date'] ?></td>     
                        </tr>
                        <?php
                        }
                        
                        mysqli_free_result($result);
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    
<br/>
<br/>
<br/>





<?php include(SHARED_PATH . '/footer.php'); ?>