<?php session_start();
include 'connection.php';

$tid=$_GET['tid'];
if(!isset($_SESSION["id"]))
{
    header('location:index.php');
}
$q="DELETE FROM  treatment WHERE tid=".$tid;
if (mysqli_query($cn,$q)) {
  echo "<script>alert('Treatement Deleted'); window.location.href='add-tratements.php';</script>";
} else {
   echo "<script> alert('Failed to Delete ');</script>;";
}