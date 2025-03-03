<?php session_start();
  
 if(!isset($_SESSION['em'])) 
 {
    echo "<script>
    window.location.href='forgot-password.php';
    </script>";
 } 

    $em = $_SESSION['em'];
   $cn=mysqli_connect("localhost","root","","dietcian");
   //var_dump($id);

   $np=$cp=$msg="";
  if(isset($_POST["b1"])){
  
  

  $np=$_POST['npwd'];
  $cp=$_POST['cpwd'];

     if($np == $cp){
          $qu="UPDATE register SET rpass='$np' WHERE remail='$em'";
            //echo "$qu";

            if(mysqli_query($cn,$qu))
            {
                session_destroy();
                echo"<script>
                alert('password update successfully');
                window.location.href='index.php';
                 </script>";
            }
            else{
                $msg="failed to update password";
            }
     }
       else{
         $msg ="New Password Must be same as Confirm Password";
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

  <title>  Healthy Diet Clinic, Satara - Reset Password Form Patient</title>

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
  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/bg1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Reset Password</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container bg-white shadow-lg py-4">
      <h1 class="text-center wow fadeInUp text-primary">
        <span class="border-bottom border-5 border-primary pb-3">
        Reset Password
    </h1>
        </span>
        <h3 class="text-center  mt-4 text-danger wow fadeInUp ">
        <?php  echo $msg; ?>
        </h3>

      <form action="reset-password.php" method="post" class="main-form">
        <div class="row mt-5 ">
         
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>New password</label>
            <input type="password" class="form-control" placeholder="New Password"
            name="npwd" required>
          </div>
        
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password"
            name="cpwd" required>
          </div>
          
          
          
          
        </div>

        <div class=" text-center">

            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Submit"
            name="b1">

           

            <p class="text-center mt-4">
            <a href="login.php" class="btn btn-danger mt-3">
                Back 
            </a>
            </p>
        </div>
      </form>
    </div>
  </div>

  
  <?php include  'footer.php';?>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>


<script src="assets/js/theme.js"></script>

  
</body>
</html>