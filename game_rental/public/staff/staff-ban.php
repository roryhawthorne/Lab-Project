<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Ban Hammer'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>

    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">set refunds</h2>
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
            <table class="table" style="font-family: arial;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Banned</th>
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
                                <form>
                                    <div class="form-check">
                                        <a href=""><input type="checkbox" class="form-check-input" id="banCheck"></a>
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