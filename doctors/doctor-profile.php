<?php
    include("connection.php");    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <title>Lab Automation</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
</head>
<style>
     *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body
    {
        background-color: grey;
    }

    .page-wrapper
    {
        width: 100%;
        padding: 50px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        position: absolute;
        /* border: 2px solid black; */

    }
    .page-wrapper .content
    {
        width: 400px;
        padding: 50px;
        border-width: 5px;
        border-radius: 5px;
        text-align: center;
        background-color: darkblue;
        position: relative;
        right: 15%;
    }
    .page-wrapper .content h2
    {
        margin: 10px 0px;
        color: #fff;
    }
    .page-wrapper .content input
    {
        border: 1px solid black;
        padding: 5px 15px;
        border-radius: 10px;
    }
    .page-wrapper .content .update
    {
        background-color: grey;
        color: #fff;
        transition-duration: 0.4s;
        border-color: #fff;
        cursor: pointer;
    }
    .page-wrapper .content .update:hover
    {
        transform: scale(1.1);
    }



    
</style>

<body>
    <div class="main-wrapper">
        <?php 
            include('header.php');
            include('sidebar.php');
            $id = $_SESSION['username'];
            $doctorName = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_doctor WHERE d_id=$id"));
            // $specalization_id = mysqli_fetch_array(mysqli_query($connection,"SELECT specialization FROM tbl_doctor WHERE d_id=$id"));
            // $specalization_name = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_specialization WHERE sp_id=$specalization_id[specialization]"));
            
        ?>
        <div class="page-wrapper">
            <div class="content">
                <h2 style="text-align: center;">Taster Profile</h2> <br><br>
                <?php
                    $fetch_doctor = "select * from tbl_doctor";
                    $result = mysqli_query($connection,$fetch_doctor);
                    $row = mysqli_fetch_array($result);
                ?>
                <form method="post" id="form" enctype="multipart/form-data">
                    <input type="text" placeholder="Enter Full Name" value="<?php echo $row['d_name']?>" name="txtname"> <br><br>
                    <input type="email" placeholder="Enter Email" value="<?php echo $row['d_email']?>" name="txtemail"> <br><br>
                    <input type="text" placeholder="Enter Phone Number" value="<?php echo $row['d_phone']?>" name="txtphone"> <br><br>
                    <input type="text" placeholder="Enter Username" value="<?php echo $row['d_username']?>" name="txtusername"> <br><br>
                    <input type="text" placeholder="Enter Password" value="<?php echo $row['d_password']?>" name="txtpassword"> <br><br>
                    <input type="text" placeholder="Enter Address" value="<?php echo $row['clinic_address']?>" name="txtaddress"> <br><br>
                    <!-- <input type="text" value="" name="txtcharges"> <br><br> -->
                    <!-- <img src=";?>" style="border: 2px solid #000; width: 180px;"> <br>
                    <input type="file" name="txtimage"> <br><br> -->
                    <!-- <select name="txtspecialization">
                      
                    </select> <br><br>   -->
                    <input type="submit" value="Update Details" name="updatebtn" class="update">
                </form>
                <?php
                    if(isset($_POST['updatebtn']))
                    {
                        $dname = $_POST['txtname'];
                        $demail = $_POST['txtemail'];
                        $dphone = $_POST['txtphone'];
                        $dusername = $_POST['txtusername'];
                        $dpassword = $_POST['txtpassword'];
                        $daddress = $_POST['txtaddress'];
                        // $dcharges = $_POST['txtcharges'];
                        // $imagename = $_FILES['txtimage']['name'];
                        // $tmpname = $_FILES['txtimage']['tmp_name'];
                        // $imagepath = "img/profilepic/".$imagename;
                        // move_uploaded_file($tmpname,$imagepath);
                        // $dspecialization = $_POST['txtspecialization'];
                        $update_query = "UPDATE tbl_doctor set d_name='$dname',d_email='$demail',d_phone='$dphone',d_username='$dusername',d_password='$dpassword',clinic_address='$daddress'";
                        if(mysqli_query($connection,$update_query))
                        {
                            echo "
                            <script>
                                alert('Taster Updated');
                                window.location.href='index.php';
                            </script>";
                        }
                       
                    }
                ?>
				
            
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/app.js"></script>

</body>



</html>