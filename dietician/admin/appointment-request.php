<?php include 'session-check.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>  Healthy Diet Clinic, Satara - Appointment Request</title>

  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
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
    <div class=" bg-white py-5 my-3">
 
    <div class="col-md-11 mx-auto shadow-lg ">

        
        <div class="row p-1">
           
<div class="col-md-9 mx-auto">
    <h3 class="text-center text-primary">
        All Patients 
    </h3>
    <table class="table table-bordered" id="example">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Appointment For</th>
                <th>Date</th>
                <th>Status</th>              
                <th>Action</th>
            </tr>
                    </thead>
                    <tbody>

    <?php 
$qAr="SELECT r.rid,r.rname,ap.apdate,ap.apstatus,ap.tid,ap.rid,t.tid,t.tnm FROM appointment ap
 INNER JOIN register r  ON r.rid= ap.rid INNER JOIN  treatment t ON ap.tid = t.tid  WHERE ap.apstatus='Not Confirmed'";


 $rAr =mysqli_query($cn,$qAr);

 while($dataAr = mysqli_fetch_assoc($rAr))
 {
    
 ?>


                        <tr>
                            <td><?php echo $dataAr['rid']?></td>
                            <td><?php echo $dataAr['rname']?></td>
                            <td><?php echo $dataAr['tnm']?></td>
                            <td><?php echo $dataAr['apdate']?></td>
                            <td><?php echo $dataAr['apstatus']?></td>
                         
                            <td>
                                <a href="update-appointment.php" >Update</a> 
                                
                            </td>
                        </tr>
 <?php                      
}

?>

                       
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>


<br><br><br><br>


<?php include  'footer.php';?>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script>
    new DataTable('#example');
</script>
</body>
</html>