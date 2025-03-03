<?php
$msg="";
include 'connection.php';
if(isset($_POST['b1']))
{
    $cnm = $_POST['fnm'];
    $cmb = $_POST['mb'];
    $cem = $_POST['em'];
    $cmsg = $_POST['msg'];

  $qI="INSERT INTO contact(cnm,cem,cmb,cinfo) VALUES('$cnm','$cem',$cmb,'$cmsg')";
  if(mysqli_query($cn,$qI))
  {
    echo "<script>
    alert('contact Enquiry Submitted Successfully');
    </script>";
  }

  else
  {
    echo "<script>
    alert('Failed To submit');
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

  <title>Conatct information -  Healthy Diet Clinic, Satara</title>

  <link rel="stylesheet" href="assets/css/maicons.css">
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



  <?php  include 'topbar.php';?>
  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/bg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form action="contact.php" method="post" class="contact-form mt-5">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name.."
            name="fnm" required>
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address.."
            name="em" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="mb">Mobile Number</label>
            <input type="text" id="mb" class="form-control" placeholder="Enter Mobile Number.."
            name="mb" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.." name="msg" required></textarea>
          </div>
        </div>
        <input type="submit" class="btn btn-primary wow zoomIn" value="Send Message"
        name="b1">
      </form>
    </div>
  </div>

  
  <?php include  'footer.php';?>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>


<script src="assets/js/theme.js"></script>

  
</body>
</html>