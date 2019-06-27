<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <title>Infiniti - Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><img src="logo.JPG" height="30" alt="Infiniti"><br> Login</div>
      <div class="card-body">
        <form method="post" action="server.php">
            <div class="form-group">

            <label>Username</label>
            <input class="form-control"  type="text"  name="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control"  type="password" name="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
        

          <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
       <!--   <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
        </div>
      </div>
    </div>
  </div>
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
