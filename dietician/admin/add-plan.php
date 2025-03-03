<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>  Healthy Diet Clinic, Satara - Add Plan</title>

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
    <div class=" bg-white py-1 my-3">
 
    <div class="col-md-11 mx-auto shadow-lg ">

        
        <div class="row p-5">
            <div class="col-md-12 mx-auto ">
                <p class="text-center">
                    <a href="todays-appointment.php" class="text-danger">Back</a>
                </p>
                <h3 class="text-primary">Appointment For</h3>
                <hr>

            
                <p>
                    <b>Patient Name  </b> - Tejswini Gaikawad	<br>
                    <b>Appointment For </b> - Thyroid diet Plan	<br>
                    <b>Appointment Date </b> - 21/10/2023<br>
                    <b>Any Message </b> - Want to cover my thyroid . please help me<br>
                </p>

                
                <div id="container">
            <h2>Dynamically Add and Delete Table Rows using Javascript</h2> 
            <button onclick="addNewRow()">Add New Row</button>
            <button onclick="deleteRow()">Delete Row</button>
            <br><br>
            <div class="table-responsive">
        <form action="#">

            <table id="employee-table" class="table table-bordered">
                <thead>
                    
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th><th>Action</th></tr>
                </thead>
            </table>
        </div>
        
        <div class="text-center">
            
            <input type="submit" value="Add Plan" name="b1"
            class="btn btn-primary">
        </form>
        </div>
        </div>        
    </body>
    <script type="text/javascript">
         
        /* This method will add a new row */
        function addNewRow(){
            var table = document.getElementById("employee-table");
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length; 
            var row = table.insertRow(rowCount);
            for(var i =0; i < cellCount; i++){
                var cell = row.insertCell(i);
                if(i < cellCount-1){
                    cell.innerHTML='<input type="text" />';
                }else{
                    cell.innerHTML = '<input type="button" value="delete" onclick="deleteRow(this)" />';
                }
            }
        }
         
        /* This method will delete a row */
        function deleteRow(ele){
            var table = document.getElementById('employee-table');
            var rowCount = table.rows.length;
            if(rowCount <= 1){
                alert("There is no row available to delete!");
                return;
            }
            if(ele){
                //delete specific row
                ele.parentNode.parentNode.remove();
            }else{
                //delete last row
                table.deleteRow(rowCount-1);
            }
        }
    </script>
          </div>
</div>
        </div>
        </div>
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