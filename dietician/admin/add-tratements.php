<?php include "session-check.php";
$folder = "assets/treatment_img";
$msg = $tnm = $tpr = $tinfo = $timg = "";
if (isset($_POST["b1"])) {
    // echo"clicked";
    

    $tnm = $_POST["tnm"];
    $tpr = $_POST["tprice"];
    $tinfo = $_POST["tinfo"];

    $filename = $_FILES["tphoto"]["name"];
    $path = $folder . $filename;

    if (move_uploaded_file($_FILES['tphoto']['tmp_name'], $path)) {
        $qi = "INSERT INTO treatment(tnm,tpr,tinfo,timg)
       VALUES('$tnm',$tpr,'$tinfo','$path')";
        //    echo $qi;

        if (mysqli_query($cn, $qi)) {
            $msg = "treatment added successfully";

        } else {
            $msg = "failed to add treatment";
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

    <title> Healthy Diet Clinic, Satara - Add Treatements</title>

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
                    <div class="col-md-3 border-right border-2">
                    <p class="text-danger">
                            <?php echo $msg;?>
                        </p>
                        <form action="add-tratements.php" method="post" class="main-form" enctype="multipart/form-data">
                            <div class="row mt-5 ">
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Name</label>
                                    <input type="text" class="form-control" placeholder="Treatement name" name="tnm"
                                        required>
                                </div>
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Price</label>
                                    <input type="number" class="form-control" placeholder="Treatement Price"
                                        name="tprice" required>
                                </div>
                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Info</label>
                                    <textarea name="tinfo" class="form-control" rows="4" required></textarea>
                                </div>

                                <div class="col-12  py-2 wow fadeInLeft">
                                    <label>Treatement Photo</label>
                                    <input type="file" class="form-control" name="tphoto" required>
                                </div>

                                <div class="col-12  py-2 wow text-center">
                                    <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Add Treatement"
                                        name="b1">

                                </div>


                            </div>


                        </form>
                    </div>
                    <div class="col-md-9">
                        <h3 class="text-center text-primary">
                            Treatements Info
                        </h3>
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Information</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $qs="SELECT * FROM treatment";
                                   $rs=mysqli_query($cn,$qs);

                                   while ($data=mysqli_fetch_array($rs)) {
                                ?>
                                <tr>
                                    <td><?php echo $data['tid']; ?></td>
                                    <td><?php echo $data['tnm']; ?></td>
                                    <td><?php echo $data['tpr']; ?></td>
                                    <td>
                                        <?php 
                                    $pieces = substr($data['tinfo'], 0, 40);

                                    echo $pieces; ?></td>
                                    <td>
                                        <img src="<?php echo $data['timg']; ?>" alt="image" width="80">
                                    </td>
                                    <td>
                                        <a href="edit-treatements.php?i=<?php echo $data['tid']; ?>">Edit</a> |
                                        <a href="delete-treatement.php?tid=<?php echo $data['tid']?>"
                                         class="text-danger">Delete</a>

                                    </td>
                                </tr>
<?php } ?>


                                
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