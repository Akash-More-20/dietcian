<?php session_start();
if (!isset($_SESSION['id'])) {
  echo "<script>
     window.location.href='index.php';
   </script>";
}

$id = $_SESSION['id'];
include 'connection.php';

$query = "SELECT * FROM admintable WHERE  aid=$id";
//echo $query;
$rs = mysqli_query($cn, $query);

$data = mysqli_fetch_assoc($rs);