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
        Appointments Report 
    </h3>

    <form action="appointment-history.php" method="post">
        <div class="row my-3">
            <div class="col-md-5">
                <label for="">Start Date</label>
                <input type="date" name="sdate" 
                class="form-control" required>
            </div>
            <div class="col-md-5">
            <label for="">End Date</label>
            <input type="date" name="edate" 
                class="form-control" required>

            </div>
            <div class="col-md-2">
                <input type="submit" value="Submit"
                name="b1" class="btn btn-danger mt-4">
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Appointment For</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <td>1</td>
                            <td>Tejswini Gaikawad</td>
                            <td>Thyroid diet Plan</td>
                            <td>13/11/2023</td>
                         
                            <td>
                                
                                
                           
                            <a href="see-plan.php" >See Plan</a> 
                                
                                
                            </td>
                        </tr>
                        <tr>
                        <td>2</td>
                            <td>Rohan Sawant </td>
                            <td>Weight Gain</td>
                            <td>13/11/2023</td>
                         
                            <td>
                                
                                
                           
                            <a href="see-plan.php" >See Plan</a> 
                                
                                
                            </td>
                        </tr>

                        <tr>
                        <td>3</td>
                            <td>Ankita Phadatare</td>
                            <td>Weight Loss</td>
                            <td>15/11/2023</td>
                         
                            <td>
                                
                                
                           
                            <a href="see-plan.php" >See Plan</a> 
                                
                                
                            </td>
                        </tr>

                        <tr>
                        <td>4</td>
                            <td>Shivani Jadhav</td>
                            <td>Thyroid diet Plan</td>
                            <td>16/11/2023</td>
                         
                            <td>
                                
                                
                           
                            <a href="see-plan.php" >See Plan</a> 
                                
                                
                            </td>
                        </tr>

                       


                       
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
  
</body>
</html>