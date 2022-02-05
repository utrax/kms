<html>
<head>
	<title>Access Denaid</title>
	<style>
		#form{
			width: 100%;
			height: 5%;
			margin-top: 10%;
			background-color: red;
			font-weight: bold;
			font-size: 15px;
			text-align: center;
			color: #ffffff;
		}
	</style>
	</head>
	<body>
<?php
require('../Req/db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['uname'])){
	$type="";
	$ad="Admin";
	$re="Regestral";
	$te="Data-controller";
	$ur="Users";
        // removes backslashes
	$username = stripslashes($_REQUEST['uname']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$pos=$_POST["po_type"];
	$password = stripslashes($_REQUEST['pname']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
	 $query = "SELECT `Position`, `UserName`, `Password` FROM `emp_user` WHERE UserName='$username' AND Password='$password' AND Position='$pos'";
		// ".md5($password)."
	$result = mysqli_query($con,$query) or die(mysql_error());
	// $rows = mysqli_num_rows($result);
		while($row = mysqli_fetch_array($result)){
	    $_SESSION['username'] = $username;
	    $type=$row['Position'];
	    $_SESSION['Position'] = $type;
            // Redirect user to index.php
	}
		echo "<p style='width:100%;background-color:red;color:white;text-align:center'>Access Denaid <a href='..\index.php'>Retry</a></p>";
	}


if($type==$ad){
	     header("Location: ../Admins/Admins.php");
		 
         }
         if($type==$re){
        	header("Location: ../Regestral/reg.php");
        }
        if($type==$te){
        	header("Location: ../data_controller/index.php");
        }
        if($type==$ur){
        	header("Location: ../users/index.php");
        }
	    

?>
</body>
</html>
