<?php
#include auth.php to all secure pages
include("../PHP/auth.php");
?>
<html>
<head>
	<title>Kebele Management System *</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/tab_style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/reg_form.css">
    <style>
       /*Define your embeded css style code here*/
  #photos{
  width: 100%;
  height: 200%;
  margin: 0;
  padding-top: -50%;
  border-style: solid;
  border-color: #22b154;
  border-radius: 70%;
  background-color: white;
    </style>
</head>
<body>
<div id="warper">
	<div id="ims" class="headingtxt">
    <!-- logo-banner -->
		<!-- <img src="..\IMAGES\chh.png"> -->
	</div>
	<div id="content">
		<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Regester')">Regester</button>
  <button class="tablinks" onclick="openCity(event, 'Update')">Update</button>
  <button class="tablinks" onclick="openCity(event, 'Search')">Search</button>
  <button class="tablinks" onclick="openCity(event, 'Message')">Message [1]</button>
  <button class="tablinks" onclick="openCity(event, 'Delet')">Delet</button>
</div>
<div id="Regester" class="tabcontent">
  <!-- Regester Form here -->
  	<h3 style="color:yellow;">Regester New Student</h3>
  	<p style="color: orange;font-weight: bold;">the Regesteration form is under constarction it will be load here . . .</p>
  	<form action="#" method="post">
  	<lable id="rlable">First Name</lable> <input type="text" required="required"name="" id="std_reg1"><lable id="rlable">Male</lable><input type="radio" name="male"> <lable>Female</lable><input type="radio" name="female"><br>
  	<lable id="rlable">Middle Name</lable> <input type="text" name="" id="std_reg2">
  	<label id="rlable">Status</label> <select><br>
  		<option>Normal</option>
  		<option>disable</option>
  		<option>Ubnormale</option>
  	</select>

  	<br>
  	<lable id="rlable">Last Name</lable> <input type="text" name="" id="std_reg5"><br>
  	<label id="rlable">Mother Name</label> <input type="text" name="" id="std_reg3"><br>
  	<label id="rlable">Phone</label> &phone;<input type="text" value="+251" id="std_reg4"><br>
  	<input type="submit" value="Regester"name="std_reg_btn" id="subbtn">
  	<input type="reset" value="Clear"name="std_cls_btn" id="clsbtn">
  	</form>
  <!-- end of regesteration form -->
</div>
<div id="Update" class="tabcontent">
  <h3 style="color:yellow;">Update</h3>
  <p style="color: orange;font-weight: bold;">the update form is under constarction it will be load here . . .</p>
   <form action="#" method="post">
   	<label id="uplable">Enter Student ID</label> <input type="text" name="up_id">
   	<select id="selectup">Set Parameter to Update
   	<option>First Name
   	<option>Last Name</option>
   	<option>Sex</option>
   	<option>Mother Name</option>
   	<option>Phone</option>
   	<option>Status</option>
   	</select>
   	<input type="text" name="val_to_update"> <input type="submit" value="Update"name="submit_update_btn">
   </form>
   <hr>
</div>
<div id="Search" class="tabcontent">
  <h3 style="color:yellow">Search</h3>
  <p style="color:orange;font-weight: bold;">the search form is under constarction it will be load here</p>
  <form action="#" method="post">
    <p style="color:pink;font-weight: bold;"> Enter ID Number</p>  <input type="text" placeholder="Search by ID Number" id="serachtxt">
    <input type="submit" value="Search" id="searchbtn">
  </form>
  <hr>
</div>
<div id="Message" class="tabcontent">
<h3 style="color:yellow">Message</h3>
  <p style="color:orange;font-weight: bold;">All Message froms are under constarction and will be loaded here</p>
  <a href="#">[2]&nbsp;-&nbsp;Inbox</a>
  <a href="#">Compose</a>
  <a href="#">[23]&nbsp;-&nbsp;Sent</a>
  <a href="#">[96]&nbsp;-&nbsp;Trash</a>
  <hr>
  <div id="inbox">
    <!-- inbox content displayed here  -->
  </div>
  <div id="conpose">
    <!-- Conpose content displayed here -->
  </div>
  <div id="sent">
    <!-- Sent content displayed here -->
  </div>
  <div id="Trash">
    <!-- Trash content displayed here -->
  </div>
</div>
<!-- new tab delet begin here -->
<div id="Delet" class="tabcontent">
<h1>I love to Delet</h1>
</div>
<!-- end -->
	</div>
	<div id="lside">
		<br>
		<div id="usrphoto">
    <img src="..\IMAGES\dc2.jpg" id="photos">  
    </div>
			<p id="usr_pic">Welcome : <?php echo $_SESSION["username"] ?></p>
      <p id="postion_txt">Position : <?php echo $_SESSION["Position"]?></p>
      <a href="../PHP/logout.php">Logout</a>
			
		<p align="center"style="color: white;font-weight: bold;"> Quality of Kebele-Management for All !</p>
		<p style="text-align: justify;margin-left: 4px; margin-right: 4px; ">We are so motivated and inspired to create that web based Kebele management syestem to help 
      and support kebele management process in digital world, keble 04 is one of our target and we 
    successfully created the system and its very easy to use and operate ! </p>
		<p align="center"style="color: darkred;">you are looking the simplicty , the complex part is codede by programmers-of astu-cse don't forget to say 10Qs</p>
	</div>
	<div id="fo">
		<p align="center">Contact us: +251 4600000 | example@domain.com | <a href="#">https://www.kebelemanagement.com</a></p>
	</div>
</div>
<!-- javascript code bellow here helps to load the page more faster -->
<script src="../JS/tabs.js"></script>
</body>
</html>
