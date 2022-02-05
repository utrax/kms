<?php
#include auth.php to all secure pages
include("../PHP/auth.php");
?>
<html>
<head>
  
	<title>Kebele Management System *</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<link rel="stylesheet" type="text/css" href="../CSS/tab_style.css">
    <style>
  /*Define your embeded css style code here*/
    #subbtn{
      width: 120px;
      height: 30px;
      background-color: green;
      color: black;
      font-weight: bolder;
      cursor: pointer;
    }
    #subbtn:hover{
      background-color: orange;
    }
    #upbtn{

      margin-left: 70px;
      margin-top: 20px;
      cursor: pointer;
      }
      #txts1,#txt2,#txt3,#txt4,#txtpass{
      margin-left: 10px;
      padding-top: 2%;
      width: 50%;
      font-weight: bold;
    }
    #txts1:hover{
      border-color: red;
    }
      #txt2:hover{
        border-color: red;
        }
        #txt3:hover{
          border-color: red;
        }
    #txt4:hover{
      border-color: red;
      }
      #txtpass:hover{
        border-color: red;
      }
    #reg_btn{
      width: 20%;
      height: 10%;
      margin-left: 27%;
      background-color: green;
    }
    #up_btn{
      margin-top: 7%; 
       width: 60%;
      height: 10%;
      margin-left: 27%;
      background-color: green;
    }
    #up_btn:hover{
      cursor: pointer;
      background-color: orange;
    }
    #reg_btn:hover{
      cursor: pointer;
      background-color: orange;
    }
    #cls_btn{
      width: 20%;
      height: 10%;
      margin-left: 10%;
      background-color: green;
    }
    #cls_btn:hover{
      cursor: pointer;
      background-color: orange;
    }
    #photos{
  width: 100%;
  height: 200%;
  margin: 0;
  padding-top: -50%;
  border-style: solid;
  border-color: #22b154;
  border-radius: 70%;
  background-color: white;

}
    </style> 
</head>
<body>
<div id="warper">
	<div id="ims" class="headingtxt">
    <!-- logo-banner -->
	<!-- 	<img src="..\IMAGES\chh.png"> -->
	</div>
	<div id="content">
		<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Create')">Create </button>
  <button class="tablinks" onclick="openCity(event, 'Update')">Update </button>
  <button class="tablinks" onclick="openCity(event, 'Search')">Search </button>
  <button class="tablinks" onclick="openCity(event, 'UpdateWeb')">Update Web </button>
  <button class="tablinks" onclick="openCity(event, 'Confirm')">Confirm [1]</button>
</div>
<div id="Create" class="tabcontent">
  <!-- Regester Form here --> 
    <h3 style="color:yellow;">Create Employ</h3>
    <p style="color: orange;font-weight: bold;">the create employ form is under constarction it will be load here . . .</p>
        <form action="../PHP/Admins/create_emp.php"method="post">
        <table width="100%" height="70%" border="2"><tr><td width="5%">
        <span style="width: 60%;height: 40%;background-color: pink;float: left;margin-left: 50px;margin-top: -10px;">User Photo.jpg</span>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file"name="image">
        <input type="submit" name="uploaduser" value="upload Profile Photo" id="up_btn">
      </td><td>
          &nbsp;&nbsp;<lable style="color:yellow;">First Name First </lable><input type="text" name="f_name"id="txts1"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Middle Name  </lable>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name"id="txt2">
          <br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Last Name</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="l_name"id="txt3"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Username</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name"id="txt4"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Password</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass_name"id="txtpass"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Position</lable>&nbsp;&nbsp;<select name="emp_pos">
            <option value="Admin">Admin</option>
          <option value="Regestral">Regestral</option>
          <option value="Data-controller">Data-controller</option>
          </select><br><br>
          <input type="submit" value="Rgester" name="regbtn" id="reg_btn">
          <input type="reset" value="Clear" name="clsbtn" id="cls_btn">
          </td></tr>
        </table>
      </form>
  <!-- end of regesteration form -->
</div>
<div id="Update" class="tabcontent">
  <h3 style="color:yellow;">Update Employ</h3>
    <p style="color: orange;font-weight: bold;">the update Employ form is under constarction it will be load here . . .</p>
  <form action="Admins.php" method="post">
    <label style="color:yellow;">Employ User Name</label> <input type="text" name="emp_id">
    <select name="up_box"id="selectup">Set Parameter to Update
    <option value="FirstName">First Name</option>
    <option value="MiddleName">Middle Name</option>
    <option value="LastName">Last Name</option>
    <option value="Password">Password</option>
    <option value="Position">Position</option>
    </select>
    <input type="text" name="val_to_update"> <input type="submit" value="Update"name="admin_update_btn"id="subbtn">
   </form> 
  <span id="up_value"></span>
</div>
<div id="Search" class="tabcontent">
    <h3 style="color:yellow;">Search</h3>
    <p style="color: orange;font-weight: bold;">the search form is under constarction it will be load here</p>
    <label>Employ ID : &nbsp;</label><input type="text" name="">&nbsp;<input type="submit" value="Search" name="" id="subbtn">
</div>
<!-- Update Web -->
<div id="UpdateWeb" class="tabcontent">
   <h3 style="color:yellow;">Update web</h3>
    <p style="color: orange;font-weight: bold;">the Update web form is under constarction it will be load here...</p>
  <form action="upload.php"method="post">
    <p style="color:orange;font-weight: bolder;">Upload Picture </p><input type="file" value="Upload Header Picture">
    <p style="color:orange;font-weight: bolder;">Update Left Side</p><textarea rows="5"cols="50"></textarea>
    <p style="color:orange;font-weight: bolder;">Update Footer</p><textarea rows="2"cols="60"></textarea><br><br>
    <input type="submit" value="Update Content"name="" id="subbtn">
  </form>
</div>
<div id="Confirm" class="tabcontent">
  <h3 style="color:yellow;">Confirm Requsts</h3>
    <p style="color: orange;font-weight: bold;">All Confirem Requsets froms are under constarction and will be loaded here</p>


</div>
	</div>
	<div id="lside">
		<br>
		<div id="usrphoto">
      <img src="..\IMAGES\admin.jpg" id="photos">
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
