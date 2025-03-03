<?php include "session-check.php";
 $msg="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>  Healthy Diet Clinic, Satara - Change Password</title>

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
    <div class="container  bg-white shadow-lg py-4 my-3">
      <h1 class="text-center wow fadeInUp text-primary">
      <img src="  <?php echo $data['rphoto'];?>" alt="" width="70">
        <span class="border-bottom border-5 border-primary pb-3">
              <?php echo $data['rname'];?>
            </span>

            <h3>
                      
    <p class="text-center text-danger">
        <?php echo $msg;?>
    </p>

            </h3>
    </h1>

   <table class="table table-bordered">
        <thead>
            <tr>
                <th>Appointment Id</th>
                <th>Appointment Reason</th>
                <th>Appointment Date</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>
            <?php
        $qAP="SELECT t.tid,t.tnm,ap.apid,ap.rid,ap.apdate,ap.apstatus
          FROM appointment ap INNER JOIN treatment t 
          ON ap.tid = t.tid 
          WHERE rid = $id";
        $rsAP=mysqli_query($cn,$qAP);
        while($dataAp=mysqli_fetch_assoc($rsAP))
        {
          //  var_dump($dataAp);
            ?>
              <tr>
                <td><?php echo $dataAp['rid']; ?></td>
                <td><?php echo $dataAp['tnm']; ?></td>
                <td><?php echo $dataAp['apdate']; ?></td>
                <td><?php echo $dataAp['apstatus']; ?></td>
                <td>
                    Download Plan
                </td>
              </tr>
            <?php

        }

        ?>
        </tbody>
   </table>
</div>
  <?php include  'footer.php';?>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>