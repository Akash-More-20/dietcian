<?php include 'session-check.php'; 
// var_dump($data);

$folder="images/";
$rnm=$rque=$rans=$rgender=$radress=$rmob=$msg=$dob=" ";

if(isset($_POST["b1"]))
{
  $rnm=$_POST['fn'];
  $rque=$_POST['que'];
  $rans=$_POST['ans'];
  $rgender=$_POST['gen'];
  $radress=$_POST['adr'];
  $rmob=$_POST['mb'];
  $dob=$_POST['dob'];

  if($_FILES["ppic"]["name"])    
     {

  $filename=basename($_FILES["ppic"]["name"]);
  $path=$folder.$filename;
        //  echo $path;
    if(move_uploaded_file($_FILES["ppic"]["tmp_name"],$path))
    {
      $qU="UPDATE register SET rname='$rnm',rphoto='$path',rque='$rque',rans='$rans' WHERE rid=$id";
      // echo $qU;
    }
      }
      else
      {
        $qU="UPDATE register SET rname='$rnm',rque='$rque',rans='$rans' WHERE rid = $id";
      }

      if(mysqli_query($cn,$qU))
      {
             
        echo"<script>
        window.alert('Profile Updated Successfully');
        window.location.href='profile.php';
      </script>";

      }
      else
      {
       


        echo"<script>
                window.alert( 'Failed to Update...');
                window.location.href='profile.php';
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
      <?php include 'patient-info.php'?>

      <form action="profile.php" method="post" class="main-form" enctype="multipart/form-data">
        <div class="row mt-5 ">

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Full Name</label>
            <input type="text" class="form-control" placeholder="Full name"
            name="fn" required value="<?php echo $data['rname'];?>">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Mobile No </label>
            <input type="text" class="form-control" placeholder="Mobile No"
            name="mb" required value="<?php echo $data['rmob'];?>">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email address.."
            name="em" required  value="<?php echo $data['remail'];?>" readonly>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password.."
            name="pwd" required value="<?php echo $data['rpass'];?>" readonly>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Date of birth</label>
            <input type="date" class="form-control" 
            name="dob" required value="<?php echo $data['rdob'];?>">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Address"
            name="adr" required value="<?php echo $data['radr'];?>">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Security Quetion </label>
            <select name="que"  class="custom-select">
              <option <?php if($data['rque']=="What is Your Hobby"){echo'selected';}?> 
              value="What is your hobby">What is your hobby?</option>

              <option <?php if($data['rque']=="What is your School Name"){echo'selected';}?> 
              value="What is your School Name">What is your School Name?</option>

              <option <?php if($data['rque']=="What is your favourite color"){echo'selected';}?> 
               value="What is your favourite color">What is your favourite color?</option>
              
            </select>

          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Your Answer</label>
            <input type="text" class="form-control" placeholder="Answer.."
            name="ans" required value="<?php echo $data['rans'];?>">
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <label>Profile Photo</label>
            <input type="file" class="form-control"
            name="ppic"  >
          </div>

          <div class="col-12 mt-4  col-sm-6 py-2 wow fadeInRight">
            <label  >Gender :  </label><br>
            <input type="radio" name="gen" required value="male" <?php if($data['rgender']=='male'){echo 'checked';}?> required> M
            <input type="radio" value="female"  name="gen"  <?php if($data['rgender']=='female'){echo 'checked';}?> required>F
          </div>
        
          <div class="col-12 py-2 mt-3 wow  fadeInRight text-center"> 
            <input  type="submit" class="btn btn-primary mt-3 wow zoomIn"
             value="Update Profile"
            name="b1">
            
            
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