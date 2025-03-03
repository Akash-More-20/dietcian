<?php session_start();
if (!isset($_SESSION['id'])) {
    echo "<script>
       window.location.href='login.php';
     </script>";
  }

  else
  {
    $id = $_SESSION['id'];
include 'connection.php';


$qS="SELECT * FROM register WHERE rid=$id";
// echo $qS;

$rs=mysqli_query($cn,$qS);
$data = mysqli_fetch_assoc($rs); 
}