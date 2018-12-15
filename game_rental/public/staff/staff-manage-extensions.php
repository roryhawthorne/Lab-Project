<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Manage Extensions'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>

    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">Manage extensions</h2>
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
                        <th scope="col">Rental ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Game</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Extension</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT rentals.id AS rental_id, rentals.due_date, rentals.has_extension, members.fname, members.lname, members.id AS member_id, games.title FROM members JOIN rentals ON members.id=rentals.member_id JOIN games ON rentals.game_id=games.id";
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
                            <td>
                                <form id="ban-checkbox" action="<?php echo url_for('../private/scripts/manage-extension.php'); ?>" method="post">
                                    <div class="form-check">
                                        <input type="text" name="rental_id" value="<?php echo $row['rental_id'];  ?>" style="display: none;"/>
                                        <input type="text" name="has_extension" value="<?php echo $row['has_extension'];  ?>" style="display: none;"/>
                                        <input type="text" name="due_date" value="<?php echo $row['due_date'];  ?>" style="display: none;"/>
                                        <div class="form-check">
                                            <button type="submit" class="btn filter-btn" id="banMember" name="Submit">
                                                <?php 
                                                if ($row['has_extension'] == 1) { ?>
                                                    &#10004;
                                                <?php 
                                                } else { ?>
                                                    &#10006;
                                                <?php 
                                                } ?>
                                            </button>
                                        </div>                                        
                                    </div>
                                </form>
                            </td>
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

<?php include(SHARED_PATH . '/footer.php'); ?><?php

