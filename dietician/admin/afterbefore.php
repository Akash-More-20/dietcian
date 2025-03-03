<?php include "session-check.php";
$folder = "assets/afterbefore/";
$msg = $pnm = $reason   = "";
if (isset($_POST["b1"])) {
    // echo"clicked";
    

    $pnm = $_POST["pnm"];
    $reason = $_POST["reason"];
    

    $filename = $_FILES["abphoto"]["name"];
    $path = $folder . $filename;

    $date = date('Y-m-d');
    if (move_uploaded_file($_FILES['abphoto']['tmp_name'], $path)) {
        $qi = "INSERT INTO afterbefore(pnm,reason,abphoto,abdate)
       VALUES('$pnm','$reason','$path','$date')";
        //    echo $qi;

        if (mysqli_query($cn, $qi)) {
            echo "<script>
            alert('Portfolio added successfully');
           
            </script>";
            

        } else {
            echo "<script>
            alert('failed to Add');
            
            </script>";
           
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

    <title> Healthy Diet Clinic, Satara - </title>

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

                <h1>
                    <?php echo $msg; ?>
                </h1>

            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="">
        <div class=" bg-white py-1 my-3">

            <div class="col-md-11 mx-auto shadow-lg ">


                <div class="row p-1">
                    <div class="col-md-3 border-right border-2 p-3  ">

                    <h3 class="text-danger">
                        Add Portfolio
                    </h3>
                    <p class="text-danger">
                            <?php echo $msg;?>
                        </p>
                        <form action="afterbefore.php" method="post" class="main-form" enctype="multipart/form-data">
                            <div class="row mt-5 ">
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Patient Name</label>
                                    <input type="text" class="form-control" placeholder="Patient name"
                                     name="pnm" required>
                                </div>
                               
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Reason</label>
                                    <input type="text" class="form-control" placeholder="Reason"
                                     name="reason" required>
                                 </div>

                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label> Photo</label>
                                    <input type="file" class="form-control" name="abphoto" required>
                                </div>

                                <div class="col-12  py-2 wow text-center">
                                    <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Add "
                                        name="b1">

                                </div>


                            </div>


                        </form>
                    </div>
                    <div class="col-md-9">
                        <h3 class="text-center text-primary">
                            Portfolio Report
                        </h3>
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Reason</th>
                                    <th>Photo</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $qab="SELECT * FROM afterbefore";
                                   $rsab=mysqli_query($cn,$qab);

                                   $i=1;
                                   while ($dataab=mysqli_fetch_array($rsab)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $dataab['pnm']; ?></td>
                                    <td><?php echo $dataab['reason']; ?></td>
                                    
                                    <td>
                                        <img src="<?php echo $dataab['abphoto']; ?>" 
                                        alt="image" width="80">
                                    </td>
                                    <td><?php echo $dataab['abdate']; ?></td>
                                    <td>
                                        <a href="delete-portfolio.php?abid=<?php echo $dataab['abid']?>"
                                         class="text-danger">Delete</a>

                                    </td>
                                </tr>
<?php
$i++;
} ?>


                                
                            </tbody>
                        </table>
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