<?php
$cn = mysqli_connect("localhost", "root", "", "dietcian");
$email = $que = $ans = $msg = $count = "";

if (isset($_POST['b1'])) {
  $email = $_POST['em'];
  $que = $_POST['que'];
  $ans = $_POST['ans'];

  $qs = "SELECT * FROM admintable WHERE aem='$email' AND aque='$que' AND aans='$ans'";
  // echo $qs;
  $rs = mysqli_query($cn, $qs);
  // var_dump($rs);
  $count = mysqli_num_rows($rs);

  if ($count == 1) {
    session_start();
    $_SESSION['em'] = $email;
    echo "<script>
                window.location.href='reset-password.php';
                </script>";
  } else {
    $msg = "Invalid Credentials";
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

  <title> Healthy Diet Clinic, Satara - Forgot Password Form Admin</title>

  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
    <div class="container bg-white shadow-lg py-5">
      <h1 class="text-center wow fadeInUp text-primary">
        <span class="border-bottom border-5 border-primary pb-3">
          Forgot Password
      </h1>
      <h3 class="text-center  mt-4 text-danger wow fadeInUp ">
        <?php echo $msg; ?>
      </h3>
      </span>

      <form action="forgot-password.php" method="post" class="main-form">
        <div class="row mt-5 ">

          <div class="col-12 col-sm-4 py-2 wow fadeInLeft">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email address.." name="em" required>
          </div>
          <div class="col-12 col-sm-4 py-2 wow fadeInLeft">
            <label>Security Quetion </label>
            <select name="que" class="custom-select">
              <option value="What is your hobby">What is your hobby?</option>
              <option value="What is your School Name">What is your School Name?</option>
              <option value="What is your favourite color">What is your favourite color?</option>

            </select>
          </div>
          <div class="col-12 col-sm-4 py-2 wow fadeInRight">
            <label>Your Answer</label>
            <input type="text" class="form-control" placeholder="Answer.." name="ans" required>
          </div>




        </div>

        <div class=" text-center">

          <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Submit" name="b1">



          <p class="text-center mt-4">
            <a href="index.php" class="btn btn-danger mt-3">
              Back
            </a>
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