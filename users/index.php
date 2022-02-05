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
#upp{
  width: 97.5%;
  height: 58.5%;
  padding-top: -15%;
  margin-bottom: 100px;
  border-style: solid;
  border-color: #22b154;
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
  <button class="tablinks" onclick="openCity(event, 'Class')">Residential-ID Card </button>
  <button class="tablinks" onclick="openCity(event, 'Batchs')">Public awareness </button>
  <button class="tablinks" onclick="openCity(event, 'Search')">Public Health extension</button>
  <button class="tablinks" onclick="openCity(event, 'Sendfeedback')">Commercial license </button>
  <button class="tablinks" onclick="openCity(event, 'Inbox')">Birth & Marriage</button>
</div>
<div id="Class" class="tabcontent">
  <!-- Regester Form here -->
  	<h3>Users's</h3>
  	<p>the Users form is under constarction it will be load here . . .</p> 
        
        <table border="2px" >
        <tr>
        <td><div id="upp"><img src="..\IMAGES\user.jpg" height="200px" width="157px"></div></td>
        <td>
        <table >
        <h3 align="center" style="margin-top: -150px;">User-ID</h3>
        <tr>
                                <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "kebele";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $uuname = '<?php $_SESSION["username"] ?>';

            $sql = "SELECT FirstName, MiddleName, LastName, UserName FROM emp_user WHERE UserName='dd'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<br><br><br><br>"."<h4>"."FirstName: " . $row["FirstName"]."</h4>"."<h4>"." MiddleName: " . $row["MiddleName"]."</h4>"."<h4>"."Last Name : ". $row["LastName"]."</h4>"."<br>";
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>
        </tr>
        </table>
        </td>
        </tr>
        </table>

        


          
        
        </table>
  <!-- end of regesteration form -->
</div>
<div id="Batchs" class="tabcontent">
  <h1 align="center" style="color: #CD634D;font-family: Britannic Bold;">The Government of Ethiopia aims to increase access to safe water supply and basic sanitation in rural and urban areas</h1>
  <p>The Government of Ethiopia aims to increase access to safe water supply and basic sanitation in rural and urban areas and to invest more resources into water related infrastructure. For example, under the One WASH National Program, the Government of Ethiopia aims to increase access to safe water supply to 98 percent for rural areas and 100 percent for urban areas and to provide all Ethiopians with access to basic sanitation.<a href="https://www.usaid.gov/ethiopia/water-and-sanitation"><p style="color: blue;">Read More</p></a>

  <img src="..\IMAGES\water.jpg" style="height: 40%; width: 50%;">
  
</div>
<div id="Search" class="tabcontent">
  <h1 align="center" style="color: #CD634D;font-family: Britannic Bold;">To address fears of prisoners from COVID-19 and minimize risk of transmission, UNODC donates medical supplies to Ethiopia's prisons</h1>
  <p>
6 May 2020 - In Ethiopia, there have been no confirmed COVID-19 cases in prisons.  However, the uncertainty of the extent and impact of COVID-19 has created anxiety and fear among prisoners, including increased feelings of isolation. <br>People gather under a placard showing Prime Minister Abiy Ahmed at a rally organised by local authorities to show support for the Ethiopian National Defense Force, at Meskel square in downtown Addis Ababa, Ethiopia, November 7, 2021</p>
  <img src="..\IMAGES\covid.jpg" style="height: 45%; width: ;">
  <a href="https://www.unodc.org/unodc/en/frontpage/2020/May/to-address-fears-of-prisoners-from-covid-19-and-minimize-risk-of-transmission--unodc-donates-medical-supplies-to-ethiopias-prisons.html" style="color: blue;">Read More</a>
  
  
</div>
<!-- Commercial License -->
<div id="Sendfeedback" class="tabcontent">
  <h1 align="center" style="color: #CD634D;font-family: Britannic Bold;">Commercial License</h1>
  <table border="2" style="margin: 0">
    <td><img src="..\IMAGES\license.jpg" style="height: 355px; width: 400px ;"></td>
    <td><h3 style="color: #CD634D; margin: 0;" align="center">TreadMark </h3><br>
      <!-- Regester Form here -->
        <form action="../PHP/Admins/create_emp.php"method="post">
        <table width="100%" height="70%" border="2"><tr><td width="5%">
        <span style="width: 60%;height: 40%;background-color: pink;float: left;margin: 0;margin-top: -80px;">User Photo.jpg</span>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="file"name="image">
      </td><td>
          &nbsp;&nbsp;<lable style="color:yellow;">First Name First </lable><input type="text" name="f_name"id="txts1"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Middle Name  </lable>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="m_name"id="txt2">
          <br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Last Name</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="l_name"id="txt3"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Username</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name"id="txt4"><br><br>
          &nbsp;&nbsp;<label style="color:yellow;">Password</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Password" name="pass_name"id="txtpass"><br><br>
          &nbsp;&nbsp;<lable style="color:yellow;">Business</lable>&nbsp;&nbsp;<select name="emp_pos">
            <option value="Admin">Small scale</option>
          <option value="Regestral">Medium scale</option>
          <option value="Data-controller">Large Scale</option>
          </select><br><br>
          <input type="submit" value="Rgester" name="regbtn" id="reg_btn" style="margin-right: 20px;margin-left: 200px;">
          <input type="reset" value="Clear" name="clsbtn" id="cls_btn">
          </td></tr>
        </table>
      </form>
  <!-- end of regesteration form -->




    </td>
  </table>
</div>

<!-- Inbox -->
    



	</div>
	<div id="lside">
		<br>
		<div id="usrphoto">
      <img src="..\IMAGES\user.jpg" id="photos">
			</div>
			<p id="usr_pic">Welcome : <?php echo $_SESSION["username"] ?></p>
      <p id="postion_txt">Position : <?php echo $_SESSION["Position"]?></p>
      <a href="../PHP/logout.php">Logout</a>
		<p align="center"style="color: white;font-weight: bold;"> Quality of Kebele-Management for All !</p>
		<p style="text-align: justify;margin-left: 4px; margin-right: 4px; ">We are so motivated and inspired to create that web based Kebele management syestem to help 
      and support kebele management process in digital world, keble 04 is one of our target and we 
    successfully created the system and its very easy to use and operate !</p>
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
