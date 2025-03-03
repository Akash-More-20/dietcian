<?php
$cn = mysqli_connect("localhost", "root", "", "dietcian");
// var_dump($cn);
$email = $pass = $msg = "";
if (isset($_POST['b1'])) {
  $email = $_POST['em'];
  $pass = $_POST['pwd'];


  $qS = "SELECT * FROM admintable  WHERE aem='$email'
AND apwd='$pass'";
  // echo $qS;

  $rs = mysqli_query($cn, $qS);
  $count = mysqli_num_rows($rs);
  // var_dump($count);

  if ($count == 0) {
    $msg = "Invalid credentials";
  } else {
    session_start();
    $data = mysqli_fetch_assoc($rs);
    $_SESSION['id'] = $data['aid'];

    echo "<script>
         window.location.href='profile.php';
      </script>";
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title> Healthy Diet Clinic, Satara - Login Form Admin</title>

  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>



  <?php include 'topbar.php'; ?>

  <div class="page-section">
    <div class="container bg-white shadow-lg py-4">
      <h1 class="text-center wow fadeInUp text-primary">
        <span class="border-bottom border-5 border-primary pb-3">
          Admin Login Here
      </h1>
      <h3>
        <p class="text-danger text-center mt-5">
          <?php echo $msg; ?>
        </p>
      </h3>
      </h3>
      </span>

      <form action="index.php" method="post" class="main-form">
        <div class="row mt-5 ">

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email address.." name="em" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password.." name="pwd" required>
          </div>




        </div>

        <div class=" text-center">

          <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Login" name="b1">



          <p class="text-center mt-4">
            <a href="forgot-password.php">Forgot Password?</a>
          </p>
        </div>
      </form>
    </div>
  </div>



  <?php include 'footer.php'; ?>

  <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="assets/vendor/wow/wow.min.js"></script>

  <script src="assets/js/google-maps.js"></script>

  <script src="assets/js/theme.js"></script>

  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>