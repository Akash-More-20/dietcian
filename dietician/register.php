<?php
$cn=mysqli_connect("localhost","root","","dietcian");
// var_dump($cn);
$name=$email=$pass=$filename=$gender=$dob=$adr=$que=$ans=$mob=$msg = "";
$folder="profile-photo/";
if(isset($_POST["b1"])){
  $name =$_POST['fn'];
  $email =$_POST['em'];
  $pass =$_POST['pwd'];
  $que =$_POST['que'];
  $mob=$_POST['mob'];
  $ans =$_POST['ans'];
  $adr=$_POST['adr'];
  $gender=$_POST['gen'];
  $dob=$_POST['dob'];

  $filename=$_FILES["ppic"]["name"];
  $path=$folder.$filename;
 $qs="SELECT * FROM register WHERE remail='$email'";
 //echo $qs;  
 $rs=mysqli_query($cn,$qs);
 $count=mysqli_num_rows($rs);
   if ($count==1) {
    $msg="username already exist";
   }
    else {
       
      if(move_uploaded_file($_FILES['ppic']['tmp_name'],$path))
       {
       $qi ="INSERT INTO register(rname,remail,rpass,rphoto,rque,rans,radr,rgender,rdob,rmob)
       VALUES('$name','$email','$pass','$path','$que','$ans','$adr','$gender','$dob',$mob)";
       //echo($qi);
         
            if(mysqli_query($cn,$qi)){
                 echo "<script>
                 alert('Register Successfully');
                 window.location.href='login.php';
                  </script>";
            }else
            {
              echo "<Script>alert('Username Already Exists')</script>";
            }

      }
      else{
        $msg="failed to upload img";
      }
   



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

  <title>  Healthy Diet Clinic, Satara - Registration Form</title>

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
  <h1><?php
  echo"$msg";
  ?></h1>



  <?php  include 'topbar.php';?>
  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/bg.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Register</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container  bg-white shadow-lg py-4">
      <h1 class="text-center wow fadeInUp text-primary">
        <span class="border-bottom border-5 border-primary pb-3">
        Register With Us
    </h1>
        </span>

      <form action="register.php" method="post" class="main-form" enctype="multipart/form-data">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">

            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="Full name"
            name="fn" required >
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Mobile No </label>
            <input type="text" class="form-control" placeholder="Mobile No"
            name="mob" required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email address.."
            name="em" required >
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password.."
            name="pwd" required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Date of birth</label>
            <input type="date" class="form-control" 
            name="dob" required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Address"
            name="adr" required>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Security Quetion </label>
            <select name="que"  class="custom-select">
              <option value="What is your hobby">What is your hobby?</option>
              <option value="What is your School Name">What is your School Name?</option>
              <option value="What is your favourite color">What is your favourite color?</option>
              
            </select>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Your Answer</label>
            <input type="text" class="form-control" placeholder="Answer.."
            name="ans" required>
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Upload Photo</label>
            <input type="file" class="form-control" placeholder="Answer.."
            name="ppic" required>
          </div>

          <div class="col-12 mt-4  col-sm-6 py-2 wow fadeInRight">
            <label  >Gender :  </label><br>
            <input type="radio" name="gen" required value="male"> M
            <input type="radio" value="female"  name="gen" required>F
          </div>
        </div>

        <div class=" text-center">

            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Register"
            name="b1">

            <a href="login.php" class="btn btn-danger mt-3">
                Already Have An Account ?
            </a>
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