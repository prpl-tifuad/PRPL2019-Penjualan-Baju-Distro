<?php 
$connect_error = 'Sorry, we\'re experiencing connection issues.';
$con = mysqli_connect("localhost","root",""); //sesuaikan dengan password dan username mysql anda
mysqli_select_db($con, "validasi") or die($connect_error);;
 //nama database yang kita gunakan
?>