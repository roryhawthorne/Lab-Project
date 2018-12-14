    <footer class="page-footer font-small pt-4" style="background-color: #3a4648;">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">       
                    <h5 class="text-uppercase" style="color: white;">Footer Content</h5>
                    <p style="color: #a1acac">Here you can use rows and columns here to organize your footer content.</p>
                </div>
            <hr class="clearfix w-100 d-md-none pb-3"/>
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase" style="color: white;">Browse Games</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" style="color: #a1acac">Back to top</a>
                    </li>
                    <li>
                        <a href="index.php?see-only=<?php echo xbox1 ?>&order-by=<?php echo $order_type?>#browse-games" style="color: #a1acac">Xbox One</a>
                    </li>
                    <li>
                        <a href="index.php?see-only=<?php echo ps4 ?>&order-by=<?php echo $order_type?>#browse-games" style="color: #a1acac">PS4</a>
                    </li>
                    <li>
                        <a href="#!" style="color: #a1acac">Nintendo Switch</a>
                    </li>
                </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase" style="color: white;">Staff utilities</h5>

                <ul class="list-unstyled">
                    <li> 
                        <a href="<?php echo url_for('/staff/login.php'); ?>" style="color: #a1acac">Log in</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('/staff/staff-add-member.php'); ?>" style="color: #a1acac">Add Member</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('/staff/staff-remove-member.php'); ?>" style="color: #a1acac">Remove Member</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('/staff/staff-ban.php'); ?>" style="color: #a1acac">Ban</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        <p style="color: white;">© 2018 Copyright: Adam, Rory, Stanislav, Ibs, Oscar</p>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

<?php
  db_disconnect($db);
?>
