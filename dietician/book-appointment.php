<?php include "session-check.php";
$msg="";
if (isset($_POST["b1"])) {
    $tid=$_POST['tid'];
    $date=$_POST['adate'];
    $status="Not Confirmed";
    $qI="INSERT INTO appointment (rid,tid,apdate,apstatus) 
    VALUES ($id,$tid,'$date','$status')";
    // echo $qI;

    if(mysqli_query($cn, $qI)){
     
      echo "<script>
        alert('appointment added succsefully');
      </script>";
}else{
  $msg= " failed to book an Appointment book Succsessfully";
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

  <title>  Healthy Diet Clinic, Satara - Profile</title>

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

          Book an Appointment 

   
        <span class="border-bottom border-5 border-primary pb-3">
         
    

            </span>

      </h1>
      <p class="text-danger text-center">
        <?php echo $msg; ?>

      </p>

      <form action="book-appointment.php" method="post" class="main-form" enctype="multipart/form-data">
        <div class="mx-auto mt-5 col-md-6 ">
            <div class="mb-2">
                <label >Select treatment</label>
              <select name="tid" class="form-control">
                <option value="" disabled selected >select treatement</option>
                <?php 
                $qT="SELECT * FROM treatment ";
                $rT=mysqli_query($cn, $qT);
                while($rowT=mysqli_fetch_array($rT)){
                  // var_dump($rowT);
                  ?>
                <option value="<?php echo $rowT['tid']?>"><?php echo $rowT["tnm"]?></option>
               
               <?php
                }
                ?>
              </select>
              </div>
              <div class="mb-2">
                <label >Select appointment Date</label>
               <input type="date" name="adate" class="form-control" required>
              </div>
              
         
          <div class="col-12 py-2 mt-3 wow  fadeInRight text-center"> 
            <input  type="submit" class="btn btn-primary mt-3 wow zoomIn"
             value="Book an appointment" name="b1">
            </div>

        </div>

       
      </form>
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