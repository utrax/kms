<?php
if (isset($_POST['regbtn'])){
    $fname=$_POST["f_name"];
    $mname=$_POST["m_name"];
    $lname=$_POST["l_name"];
    $postion=$_POST["emp_pos"];
    $username=$_POST["user_name"];
    $passname=$_POST["pass_name"];
    if($fname==""  || $mname==""  || $lname==""  || $postion=="" || $username=="" || $passname==""){
      ?>
<script>
alert("try agin Valuse Must Be Filled");
</script>
      <?php
    }
    else{

      $stm="INSERT INTO `emp_user`(`FirstName`, `MiddleName`, `LastName`, `UserName`, `Password`, `Position`) VALUES ('$fname','$mname','$lname','$username','$passname','$postion')";
    

include '../DB_connect.php';
if($result){
  ?>
  <script>
alert("saved correctly");
</script>

<?php
header("Location: ../../Admins/Admins.php");
?>
  
<?php
}else{
  ?>
  <script>
alert("not saved");
  </script>
  <?php
}
}
}


// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 

?>
