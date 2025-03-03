<?php session_start();
$tid = $_GET['i'];
$cn = mysqli_connect("localhost", "root", "", "dietcian");
$folder = "assets/treatment_img";
$msg = $tnm = $tpr = $tinfo = $timg = $err="";
$qT = "SELECT * FROM treatment WHERE tid=$tid";
$rT = mysqli_query($cn, $qT);
$dataT = mysqli_fetch_array($rT);
// var_dump($dataT);
 
if(isset($_POST["b1"])){
    // echo"clicked";
    $tid=$_POST['tid'];
    $tnm=$_POST["tnm"];
    $tpr=$_POST["tprice"];
    $tinfo=$_POST["tinfo"];
  
    if(!empty(basename($_FILES["tphoto"]["name"])))
    {
        
        $filename = basename($_FILES["tphoto"]["name"]);
        $path = $folder . $filename;
        if (move_uploaded_file($_FILES['tphoto']['tmp_name'], $path))
     {
       $qU="UPDATE treatment SET tnm='$tnm', tpr=$tpr, tinfo='$tinfo',timg='$path' WHERE tid=$tid";
       
     }
     else
     {
         $err="image failed to upload";
     }
    }
     else
     {
        $qU="UPDATE treatment SET tnm='$tnm', tpr=$tpr, tinfo='$tinfo' WHERE tid=$tid";
       
     }
      
      if(mysqli_query($cn, $qU))
      {
          echo"<script> 
                alert ('Updated successful');
                  window.location.href='add-tratements.php';
          </script>";  
      }
      else{
        echo"<script> 
                alert ('Failed to update');
                  window.location.href='add-tratements.php';
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

    <title> Healthy Diet Clinic, Satara - Edit Treatements</title>

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



    <?php include 'topbar.php'; ?>
    <div class=" overlay-dark bg-image">
        <div class="my-3">
            <div class="container text-center wow fadeInUp">

                <?php include 'profile-menu.php'; ?>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="">
        <div class=" bg-white py-1 my-3">

            <div class="col-md-11 mx-auto shadow-lg ">


                <div class="row p-1">
                    <div class="col-md-5 mx-auto">
                        <h3>
                            <?php echo $msg; ?>
                        </h3>
                        <form action="edit-treatements.php?i=<?php echo $tid; ?>" method="post" class="main-form"
                            enctype="multipart/form-data">
                            <div class="row mt-5 ">
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <input type="hidden" name="tid" class="form-control mb-2"
                                        value="<?php echo $dataT['tid']; ?>">
                                        
                                    <label>Treatement Name</label>
                                    <input type="text" class="form-control" placeholder="Treatement name" name="tnm"
                                        required value="<?php echo $dataT['tnm']; ?>">
                                </div>
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Price</label>
                                    <input type="number" class="form-control" placeholder="Treatement Price"
                                        name="tprice" required value="<?php echo $dataT['tpr']; ?>">
                                </div>
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Info</label>
                                    <textarea name="tinfo" class="form-control" rows="4"
                                        required><?php echo $dataT['tinfo']; ?></textarea>
                                </div>

                              
                                <div class="col-12  py-2 wow ">
                            <div class="row">
                                <div class="col-md-8">
                                <label>Treatement Photo</label>
                                    <input type="file" class="form-control" name="tphoto" 
                                        value="<?php echo $dataT['timg']; ?>">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo $dataT['timg']; ?>" alt="img" width="70">
                                </div>
                            </div>
                            <div class="col-12  py-2 wow fadeInLeft">
                                
                            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Edit Treatement"
                                        name="b1">

                                    <a href="add-tratements.php " class="pt-3 text-danger">Back</a>

                                </div>

                                </div>


                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>

    <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="assets/vendor/wow/wow.min.js"></script>

    <script src="assets/js/google-maps.js"></script>

    <script src="assets/js/theme.js"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>