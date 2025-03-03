<?php include "session-check.php";
$msg="";
if (isset($_POST["b1"])) {
    $ftext=$_POST['msg'];
    $date=date('Y-m-d');
    $status="Not Published";
    $qI="INSERT INTO  feedback (rid,ftext,fdate,fstatus) 
    VALUES ($id,'$ftext','$date','$status')";
    // echo $qI;

    if(mysqli_query($cn, $qI)){
     
      echo "<script>
        alert('Feedback added succsefully');
      </script>";
}else{
    echo "<script>
    alert('Failed to add Feedback');
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

  <title>  Healthy Diet Clinic, Satara - Add Review</title>

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
    <div class="container     bg-white shadow-lg py-4 my-3">
   
      <p class="text-danger text-center">
        <?php echo $msg; ?>

      </p>

      <div class="row ">
          
          
          <div class=" mt-3 col-md-4  ">
              
              <div class="mb-2">
              <h1 class="text-center wow fadeInUp text-primary">
                Add Review </h1>
                  <form action="add-feedback.php" method="post" class="main-form" >
                  <label >Your Feedback</label>
                  <textarea name="msg" class="form-control" rows="10"></textarea>
                </div>
                
                
                <div class="col-12 py-2 mt-3 wow  fadeInRight text-center"> 
                    <input  type="submit" class="btn btn-primary mt-3 wow zoomIn"
                    value="Give Feedback" name="b1">
                </div>
                
            </div>
            
            <div class="col-md-8 p-3">
            <h1 class="text-center wow fadeInUp text-primary mb-3">
                 Review Details </h1>
                <table class="table table-bordered">
                    <tr>

                        <th>#</th>
                        <th>Feedback</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>

            <?php
                $qF="SELECT *FROM feedback WHERE rid =$id";
                $rsF= mysqli_query($cn,$qF);
                $i=1;
                while ($data = mysqli_fetch_assoc($rsF)) {
                   ?>

                
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data['ftext'];?></td>
                        <td><?php echo $data['fdate'];;?></td>
                        <td><?php echo $data['fstatus'];;?></td>
                    </tr>
                    </table>

                    <?php
                    $i++;

}
?>
            </div>
        </div>

       
      </form>
    </div>
  </div>
  </div>




<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>