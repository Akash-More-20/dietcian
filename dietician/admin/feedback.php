<?php include 'session-check.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>  Healthy Diet Clinic, Satara - Patient Feedback </title>

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
    <div class=" bg-white py-1 my-3">
 
    <div class="col-md-11 mx-auto shadow-lg ">

        
        <div class="row p-1">
           
<div class="col-md-12 mx-auto">
    <h3 class="text-center text-primary">
        Feedback Reports 
    </h3>
    <table class="table table-bordered" id="feedback">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Feedback</th>
              
                <th>Status</th>
                <th>Action</th>
            </tr>
                    </thead>
                    <tbody>

                    <?php

$qF ="SELECT r.rid,r.rname,f.fid,f.ftext,f.fdate,f.fstatus FROM 
register r INNER JOIN feedback f 
ON r.rid = f.rid";
$rF=mysqli_query($cn,$qF);
$i=1;
while($dataF = mysqli_fetch_assoc($rF))
{
  //var_dump($dataF);
?>

                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $dataF['rname']?></td>
                            <td>
                          <?php echo $dataF['ftext'];?>
                          </td>
                         
                            <td>
                            <?php echo $dataF['fstatus'];?>
                            </td>
                            <td>
            <a href="update-feedback.php?fid=<?php echo $dataF['fid']?>"
             class="btn btn-dark btn-sm">Update</a>
                            </td>
                        </tr>
                      
    <?php

    $i++;

}
?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>


<br><br><br>
<?php include  'footer.php';?>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script>
    new DataTable('#feedback');
</script>
</body>
</html>