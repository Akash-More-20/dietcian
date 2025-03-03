<?php session_start();
include 'connection.php';

$abid=$_GET['abid'];
if(!isset($_SESSION["id"]))
{
    header('location:index.php');
}
$q="DELETE FROM  afterbefore WHERE abid=".$abid;
if (mysqli_query($cn,$q)) 
{
  echo "<script>alert('Treatement Deleted'); window.location.href='afterbefore.php';</script>";
} else {
   echo "<script> alert('Failed to Delete ');</script>;";
}