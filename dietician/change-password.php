<?php session_start();
if(!isset( $_SESSION['id']))
{
    header('location:login.php');
}
else
{
    $id = $_SESSION['id'];
}
$cn=mysqli_connect("localhost","root","","dietcian");

  $qS="SELECT * FROM register WHERE rid=$id";
  // echo $qS;

  $rs=mysqli_query($cn,$qS);
  $data=mysqli_fetch_assoc($rs);
  // var_dump($data);
  $msg =$opwd =$npwd=$cpwd="";

  if(isset($_POST['b1']))
  {
    $opwd=$_POST['opwd'];
    $npwd=$_POST['npwd'];
    $cpwd=$_POST['cpwd'];

    $q="SELECT * FROM register WHERE rid=$id AND rpass='$opwd'";
    $rs=mysqli_query($cn,$q);
    $_count=mysqli_num_rows($rs);
    
    // var_dump($_count);

    if($_count==1){
          if($npwd == $cpwd)
          {
            $qU="UPDATE register SET rpass='$cpwd' WHERE rid=$id";
          
            if(mysqli_query($cn,$qU))
            {
              echo"<script>
              alert('password change successfully');
                window.location.href='login.php';
              </script>";


            }
            else
            {

              $msg = "Failed to Change Password try again !...";
            }

          }else
          {

            $msg = "New And Confirm Password Must be same";
          }


    }
    else
    {
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
    <?php include 'patient-info.php';?>
           
                      
    <p class="text-center text-danger">
        <?php echo $msg;?>
    </p>

          
   

    <form action="change-password.php" method="post" class="main-form">
        <div class="row mt-5 ">
         
          <div class="col-12 col-sm-4 py-2 wow fadeInLeft">
            <label>Old Password</label>
            <input type="password" class="form-control" placeholder="Old Password"
            name="opwd" required>
          </div>
          <div class="col-12 col-sm-4 py-2 wow fadeInLeft">
            <label>New Password</label>
            <input type="password" class="form-control" placeholder="New Password"
            name="npwd" required>
          </div>
          <div class="col-12 col-sm-4 py-2 wow fadeInLeft">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password"
            name="cpwd" required>
          </div>
        
          
          
          
          
        </div>

        <div class=" text-center">

            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Submit"
            name="b1">

           

           
        </div>
      </form>

      <br><br><br><br><br>
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