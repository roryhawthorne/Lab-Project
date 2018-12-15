<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'View All Members'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<?php 
    $view_only = "";
    $order_type = "";
    $sql = "SELECT id, fname, lname, email, address, member_since, is_banned FROM members ";
    
    if (isset($_GET['see-only'])) {
        
        $view_only = $_GET['see-only'];
        $sql .= " WHERE ";
        
        switch ($view_only) {
            case "all":
                $sql = "SELECT id, fname, lname, email, address, member_since FROM members";
                break;
            case "banned":
                $sql .= "is_banned=1";
                break;
            case "overdue":
                $sql .= "";
                break;
            case "extensions":
                $sql .= "";
                break;
            default:
                $sql = "SELECT id, fname, lname, email, address, member_since FROM members";
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
                $sql .= "lname ASC, fname ASC";
                break;
            case "alphabetdesc":
                $sql .= "lname DESC, fname DESC";
                break;
            case "newestmember":
                $sql .= "member_since DESC";
                break;
            case "oldestmember":
                $sql .= "member_since ASC";
                break;
            default:
                $sql = substr($sql, 0, -10);
                break;
               
        }
    }
    
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);    
?>

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
                        <p><a href="staff-view-all-members.php?see-only=<?php echo all ?>&order-by=<?php echo $order_type?>">All</a></p>
                        <p><a href="staff-view-all-members.php?see-only=<?php echo banned ?>&order-by=<?php echo $order_type?>">Banned</a></p>
                        <p><a href="#">Overdue</a></p>
                        <p><a href="#">Extensions</a></p>
                    </div>
                    <br/>
                    <div>
                        <h3>Order By</h3>
                        <hr/>
                        <p><a href="staff-view-all-members.php?see-only=<?php echo $view_only?>&order-by=<?php echo def ?>">Default</a></p>
                        <p><a href="staff-view-all-members.php?see-only=<?php echo $view_only?>&order-by=<?php echo alphabet ?>">Alphabet</a></p>
                        <p><a href="staff-view-all-members.php?see-only=<?php echo $view_only?>&order-by=<?php echo alphabetdesc ?>">Reverse alphabet</a></p>
                        <p><a href="staff-view-all-members.php?see-only=<?php echo $view_only?>&order-by=<?php echo newestmember ?>">Newest members</a></p>
                        <p><a href="staff-view-all-members.php?see-only=<?php echo $view_only?>&order-by=<?php echo oldestmember ?>">Oldest members</a></p>
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
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Member Since</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        
                        $count = 0; 
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['lname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['member_since'] ?></td>     
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