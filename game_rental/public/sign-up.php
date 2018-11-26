<?php
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/stylesheet.css" type="text/css">
</head>

<body>
  <div class="container jumbotron">

    <div class="row">
      <div class="col-4"></div>
      <div class="col jumbotron">
        <form>
          <div class ="from-group">
            <label for="exampleInputName1"> First Name</label>
            <br>
            <input type="name" class="from-control" id="exampleInputName1" placeholder="Enter your first name">
          </div>
          <div class ="from-group">
            <label for="exampleInputSurname1">Last Name</label>
            <br>
            <input type="surname" class="from-control" id="exampleInputSurname1" placeholder="Enter your family name">
          </div>

          <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleConfirmPassword1">Confirm password</label>
            <input type="password" class="form-control" id="exampleConfirmPassword1" placeholder="Re-enter your password">
          </div>

          <br>
          <div class="form-group">
            <label for="exampleInputCardHolderName1">Cardholder Name</label>
            <input type="cardName" class="form-control" id="exampleInputCardHolderName1" placeholder="Enter the name on the card">
          </div>
          <div class="form-group">
            <label for="exampleInputCardNumber1">Card Number</label>
            <input type="number" class="form-control" maxlenght="16" id="exampleInputCardNumber1"  placeholder="The 16 digit card number">
          </div>
          <div class="form-group">
            <label for="exampleInputExpiryDate1">Expiry Date</label>
            <input type="month" class="form-control" id="exampleInputExpiryDate1" placeholder="month">
          </div>

          <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
      </div>
      <div class="col-4"></div>
    </div>

  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>