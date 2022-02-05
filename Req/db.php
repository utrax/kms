<?php
// Enter your Host, username, password, database below.
// we will set the a password "" to localhost Database inorder to be secure !.
$con = mysqli_connect("localhost","root","","kebele");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL : " . mysqli_connect_error();
  }
?>
