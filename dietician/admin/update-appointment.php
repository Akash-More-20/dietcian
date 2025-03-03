<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>  Healthy Diet Clinic, Satara - Add Treatements</title>

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
  <div class=" overlay-dark bg-image" >
    <div class="my-3">
      <div class="container text-center wow fadeInUp">
        
      <?php include 'profile-menu.php';?>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="">
    <div class=" bg-white py-1 my-3">
 
    <div class="col-md-11 mx-auto shadow-lg ">

        
        <div class="row p-5">
            <div class="col-md-5 mx-auto ">
               
                <h3 class="text-primary">Appointment For</h3>
                <hr>

                <p>
                    <b>Patient Name  </b> - Tejswini Gaikawad	<br>
                    <b>Appointment For </b> - Thyroid diet Plan	<br>
                    <b>Appointment Date </b> - 21/10/2023<br>
                    <b>Any Message </b> - Want to cover my thyroid . please help me<br>
                </p>

                <form action="update-appointment.php" method="post">
                <div class="col-12  py-2 wow fadeInLeft">
            <label>Select Choice </label>
            <select name="apstatus"  class="custom-select">
              <option value="Confirmed">Confirmed</option>
              <option value="Not    Confirmed">Not Confirmed</option>
             
              
            </select>

          </div>

          <div class="text-center p-3">
            <input type="submit" value="Update" name="b1"
            class="btn btn-primary">

            <a href="appointment-request.php">Back</a>
          </div>
                </form>
</div>
        </div>
        </div>
    </div>
</div>



<?php include  'footer.php';?>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>