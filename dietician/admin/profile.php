<?php include 'session-check.php';
//var_dump($data);

$name = $mob = $que = $ans = $fb = $insta = $msg = "";

if (isset($_POST['b1'])) {
  //echo "clicked";

  $name = $_POST['fn'];
  $mob = $_POST['mb'];
  $que = $_POST['que'];
  $ans = $_POST['ans'];
  $fb = $_POST['fb'];
  $insta = $_POST['insta'];

  if ($count == 0) {
    $qupdate = "UPDATE admintable SET anm='$name',amob='$mob',aque='$que',aans='$ans',
  afb='$fb',ainsta='$insta' WHERE aid=$id";
    // echo $qupdate;

  } else {
    $qupdate = "UPDATE admintable SET anm='$name',
  amob='$mob', aque='$que', aans='$ans' WHERE aid=$id";

  }
  if (mysqli_query($cn, $qupdate)) {

    echo "<script>
  window.alert('Profile Updated Successfully');
  window.location.href='profile.php';
</script>";

  } else {



    echo "<script>
          window.alert( 'Failed to Update...');
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

  <title> Healthy Diet Clinic, Satara - Profile</title>

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
  <div class=" overlay-dark bg-image">
    <div class="my-3">
      <div class="container text-center wow fadeInUp">

        <?php include 'profile-menu.php'; ?>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="">
    <div class="container  bg-white shadow-lg py-4 my-3">
      <h1 class="text-center wow fadeInUp text-primary">
        <span class="border-bottom border-5 border-primary pb-3">
          <!-- Sunita Vairat -->
          <?php echo $data['anm']; ?>

        </span>


      </h1>

      <form action="profile.php" method="post" class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="Full name" name="fn" required
              value="<?php echo $data['anm']; ?>">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Mobile No </label>
            <input type="text" class="form-control" placeholder="Mobile No" name="mb" required
              value="<?php echo $data['amob']; ?>">
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Security Quetion </label>
            <select name="que" class="custom-select">

              <option <?php if ($data['aque'] == "What is Your Hobby") {
                echo 'selected';
              } ?> value="What is your hobby">
                What
                is your hobby?</option>

              <option <?php if ($data['aque'] == "What is your School Name") {
                echo 'selected';
              } ?>
                value="What is your School Name">What is your School Name?</option>

              <option <?php if ($data['aque'] == "What is your favourite color") {
                echo 'selected';
              } ?>
                value="What is your favourite color">What is your favourite color?</option>

            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Your Answer</label>
            <input type="text" class="form-control" placeholder="Answer.." name="ans" required
              value="<?php echo $data['aans']; ?>">
          </div>



          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Facebook Link</label>
            <input type="text" class="form-control" placeholder="Facebook link" name="fb" required
              value="<?php echo $data['afb']; ?>">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Instagram Link </label>
            <input type="text" class="form-control" placeholder="instagram link" name="insta" required
              value="<?php echo $data['ainsta']; ?>">
          </div>

          <div class="col-12  py-2 mt-3 wow text-center">
            <input onclick="alert('Update Profile Updated')" type="submit" class="btn btn-primary mt-3 wow zoomIn"
              value="Update Profile" name="b1">

          </div>


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