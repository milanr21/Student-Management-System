<?php

session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header('location: ../login.php');
}
  
?>

<?php

include('header.php');
include('titleheader.php');
if(isset($_POST['submit'])){
    $_POST['submit'] = false;
}
?>
<br><h1 align="center"> ADD STUDENTS TO THE RECORD</h1><br>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    
    <table align="center" border="1" style="width:50%; margin-top:40px;">
        <tr style="width:100%;">
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter City" required></td>
        </tr>

        <tr>
            <th>Department</th>
            <td><input type="text" name="department" placeholder="Enter Department" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required> </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    // $con = mysqli_connect('localhost','root','','student_database');
    include("../dbcon.php");
	// if($con == false){
	// 	echo "Connection not successful";
	// }
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $dep = $_POST['department'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];

        
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    
    
    
    $qry = "INSERT INTO `student`(`name`, `city`,`department`, `rollno`,`image`) VALUES ('$name','$city','$dep','$rollno','$imagename')";
   
    $run = mysqli_query($con,$qry);
    
    if($run == true){
        ?>
        <script>
            alert('Data Inserted Successfully');
        </script>
        <?php
    }
    
        
}


?>
