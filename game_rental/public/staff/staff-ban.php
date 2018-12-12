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
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Banned</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <form>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <form>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>
                            <form>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
<br/>
<br/>
<br/>





<?php include(SHARED_PATH . '/footer.php'); ?>