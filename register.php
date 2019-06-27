
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Infiniti - Register</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><img src="logo.JPG" height="30" alt="Infiniti"><br>Register an Account</div>
      <div class="card-body">
        <form method="post" action="reg.php">
          <?php include('errors.php'); ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>Username</label>
                <input class="form-control"type="text"   name="username" value="<?php echo $username; ?>" >
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input class="form-control" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" >
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Password</label>
                <input class="form-control" type="password" name="password_1" >
              </div>
             <div class="col-md-6">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="password_2" >
              </div>
            </div>
          </div>
          
           <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
        <!---  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
