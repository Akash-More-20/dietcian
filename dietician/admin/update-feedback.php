<?php include "session-check.php";
$fid=$_GET['fid'];

$qF ="SELECT r.rid,r.rname,f.fid,f.ftext,f.fdate,f.fstatus FROM 
register r INNER JOIN feedback f 
ON r.rid = f.rid WHERE f.fid =$fid";
$rF= mysqli_query($cn,$qF);
$dataF = mysqli_fetch_assoc($rF);

if (isset($_POST['b1'])) {
    $status = $_POST['status'];
    $fid = $_POST['fid'];
    $qU="UPDATE feedback SET fstatus ='$status' WHERE fid =$fid";

    if(mysqli_query($cn,$qU))
    {
        echo "<script>
        alert('Feedback Status Updated Successfully');
        window.location.href='feedback.php';
        </script>";
    }

    else
    {
        echo "<script>
        alert(' Updation Failed ');
        window.location.href='feedback.php';
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

    <title> Healthy Diet Clinic, Satara - Update Treatements </title>

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
                    <div class="col-md-6 mx-auto ">
                   
                        <form action="update-feedback.php?fid=<?php echo $fid;?>" method="post" class="main-form" enctype="multipart/form-data">
                            <div class="row mt-5 ">
                                <div class="col-12  py-2 wow fadeInLeft">

                                <input type="number" class="form-control"  name="fid" value="<?php echo $fid;?>"
                                >
                                    <label>Patient Name</label>
                                    <input type="text" class="form-control"  name="tnm" readonly
                                        required value="<?php echo $dataF['rname']?>">
                                </div>
                               
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Info</label>
                                    <textarea name="tinfo" class="form-control" rows="4" readonly><?php echo $dataF['ftext']?></textarea>
                                </div>

                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Select Status</label>
                                   
                                    <select name="status" class="form-control">
                                        <option <?php if($dataF['fstatus']=='Published') {echo 'selected';}?> value="Published">Published</option>
                                        <option <?php if($dataF['fstatus']=='Not Published') {echo 'selected';}?> value="Not Published">Not Published</option>
                                    </select>
                                </div>

                                <div class="col-12  py-2 wow text-center">
                                    <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Update Feedback Status"
                                        name="b1">

                                        <a href="feedback.php">Back</a>

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
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script>
    new DataTable('#example');
</script>
</body>

</html>