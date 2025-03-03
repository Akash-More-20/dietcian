<?php session_start();
 $cn=mysqli_connect("localhost","root","","dietician");

   $email=$pass=$msg="";

    if(isset($_POST['b1']))
    {
       $email=$_POST['em'];
       $pass=$_POST['pwd'];
    

   $qS="SELECT * FROM register WHERE  rem ='$email'
    AND rpwd= '$pass'";
     //echo $qS;

    $rs= mysqli_query($cn,$qS);
    $count=mysqli_num_rows($rs);
      //var_dump($count);

      if($count==0)
      {
          $msg="Invalid Credintials";
      }
      else
      {
           session_start();
           $data=mysqli_fetch_assoc($rs);
           $_SESSION['id']=$data['rid'];
           
           echo"<script>
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
    <title>Satara Dietician | Loginpage </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>


<?php include 'header.php';?>

<div class="container  mt-4">
    <div class="row">
        <div class="col-md-6  text-center">
            <img src="images/register.png" alt="register"
            class="bg-white shadow-lg border border-3 p-3">
        </div>
        <div class="col-md-6 ">
            
            <div class="bg-white shadow-lg col-md-10 p-3 rounded">
            
            <h3 class="mb-3 text-danger text-center mt-5 ">
                Login Here..
            </h3>
            <p class="text-danger text-center">
                <?php echo $msg; ?>
            </p>

                <form action="login.php" method="post">
                   
                    
                    <label>Email</label>
                    <span class="text-danger">*</span>
                    <input type="Email" name="em" Placeholder="eg. HarshalKumbhar@gmail.com"
                    class="form-control my-2"required>

                    <label>Password</label>
                    <span class="text-danger">*</span>
                    <input type="password" name="pwd" Placeholder="eg. abc123"
                    class="form-control my-2"required>

                    <div class="text-center mb-2">
                    <input type="submit" value="login"
                    name="b1" class="btn btn-primary">
                    </div>
                       <div class="text-center">
                    <a class="mx-2 text-decoration-none" href="register.php" >
                        Create a new account?

                    </a>
                    <a class="mx-2 text-decoration-none" href="forgot-password.php" >
                        forgotten password?

                    </a>
                    
                    </div>
                         
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>