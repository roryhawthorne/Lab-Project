<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Remove Members'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>

    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">all members</h2>
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
                        <h3>See only</h3>
                        <hr/>
                        <p><a href="#">Banned</a></p>
                        <p><a href="#">Overdue</a></p>
                        <p><a href="#">Extensions</a></p>
                    </div>
                    <br/>
                    <div>
                        <h3>Order By</h3>
                        <hr/>
                        <p><a href="#">Alphabet</a></p>
                        <p><a href="#">Reverse alphabet</a></p>
                        <p><a href="#">Newest members</a></p>
                        <p><a href="#">Oldest members</a></p>
                    </div>
                </div>
            </div>
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
                        <th scope="col">email</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT id, fname, lname, email FROM members";
                        $result = mysqli_query($db, $sql);
                        confirm_result_set($result);
                        
                        $count == 0; 
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['lname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <form action="<?php echo url_for('../private/scripts/remove-member.php'); ?>" method="post">
                                    <input type="text" name="id" value="<?php echo $row['id'];  ?>" style="display: none;"/>
                                    <div class="form-check">
                                        <button type="submit" class="btn filter-btn" id="banMember" name="Submit">X</button>
                                    </div>
                                </form>
                            </td>       
                        </tr>
                        <?php
                            $count++;
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