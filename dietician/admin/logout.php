<?php session_start();

$id = $_SESSION['id'];
 session_destroy();
 echo"<script>
 window.location.href='index.php';
 </script>";
?>
