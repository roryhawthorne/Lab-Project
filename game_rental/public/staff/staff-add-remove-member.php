<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'View All Members'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>
<br/>
<br/>


    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
         <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">add or remove?</h2>
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
            <br/>
            <br/>
        </div>
        <div class="row">        
            <div class="col-md-1"></div>
            <form action="<?php echo url_for('/staff/staff-add-member.php'); ?>" class="col-md-5">
                <button class="btn col-md-12 filter-btn shadow" type="submit" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Add New Member
                </button>
            </form>
            <form action="<?php echo url_for('/staff/staff-remove-member.php'); ?>" class="col-md-5">
                <button class="btn col-md-12 filter-btn shadow" type="submit" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    remove member
                </button>
            </form>  
                    

            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
    </div>



<br/>
<br/>
<br/>
<br/>
<br/>

<?php include(SHARED_PATH . '/footer.php'); ?>