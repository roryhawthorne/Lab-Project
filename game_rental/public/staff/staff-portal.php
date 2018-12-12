<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Portal'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<br/>
<br/>
<br/>
    <div class="container shadow-lg" style="background-color: white; padding: 2em; margin: auto; font-family: 'bungee', cursive; border-radius: 1em; height: 100%;">
        <div class="row">
            <h2 class"col-md-12" style="font-size: 3em; margin: auto;">Staff portal</h2>
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
                <h5>Members with due games</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Ellie</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Georgia</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Greta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            
            <form action="<?php echo url_for('/staff/staff-due-games.php'); ?>" class="col-md-10">
                <button class="btn col-md-12 filter-btn shadow" type="submit" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    view more
                </button>
            </form>
            
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <br/>
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
                <h5>Currently banned members</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Archie</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Billy</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Seamus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <br/>
            <br/>
        </div>
    </div>
    
<br/>
<br/>
<br/>




<?php include(SHARED_PATH . '/footer.php'); ?>