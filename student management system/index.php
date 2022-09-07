<html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style1.css">

        <title> Student Management System</title>
        
    </head>
    <body>
        <nav class="title">
            <div >
            <h1 align="center"> Welcome To Student Management System</h1>
            
        </div>
        <div class="container" style="text-align: right;">
            <a href="login.php"><button class="btn btn-success">Admin LogIn</button> </a></button>
        </div>
            
            
        </nav>  
        
        
        
        <form method="post" action="index.php" class="form-control">
            <table style="width:80%; height:200px" align="center" id="tab" border="1" class="table table-bordered table-striped">
                <tr>
                    <td id="dep" colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td id="choose">Choose Your Department</td>
                    <td>
                        <select name="std" class="form-control">
                            <option value="1">Bsc.CSIT</option>
                            <option value="2">BIM</option>
                            <option value="3">BA</option>
                            <option value="4">BBA</option>
                            <option value="5">BBS</option>
                            <option value="6">Microbiology</option>
                            <option value="7">BSW</option>
                            <option value="8">MBBS</option>
                            <option value="9">A Levels</option>
                            <option value="10">BCA</option>
                            <option value="11">Physics</option>
                            <option value="12">Plus Two</option>
                        </select>
                                   
                    </td>
                </tr>
                <tr>
                    <td id="choose">Enter Your Roll No</td>
                    <td><input type="text" name="rollno" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary mb-3" id="btn12" name="submit" value="Show Information"></td>                    

                    
                </tr>
            </table>
                                   
        </form>
            
            
        
        
        
    </body>
    
</html>

<?php

if(isset($_POST['submit'])){
    
    $department= $_POST['dep'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');    
    showdetails($department,$rollno);   
    
}

?>