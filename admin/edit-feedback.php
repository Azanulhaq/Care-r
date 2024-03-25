<?php
    include("connection.php");
    $id = $_GET['id'];
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
        background-color: lightblue;
    }

    .page-wrapper
    {
        width: 100%;
        padding: 50px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        position: absolute;
        margin-top: 20px;
        /* border: 2px solid black; */

    }
    .page-wrapper .content
    {
        width: 400px;
        padding: 50px;
        border: 1px solid navy;
        border-width: 5px;
        border-radius: 5px;
        text-align: center;
        background-color: #009ce7;
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
        border: 1px solid grey;
        padding: 5px 15px;
        border-radius: 10px;
        width: 280px;
    }
    .page-wrapper .content input[type=submit]
    {
        width: 160px;
    }
    .page-wrapper .content select
    {
        width: 280px;
        padding: 6px;
    }
    
</style>

<body>
    <div class="main-wrapper">
        <?php
            include('header.php');
            include('sidebar.php');
        ?>
        <div class="page-wrapper">
            <div class="content">
                <h2 style="text-align: center;">Edit / Update Feedback</h2> <br><br>
                <?php
                    $fetch_feedback = "SELECT * FROM tbl_feedback where id=$id";
                    $result = mysqli_query($connection,$fetch_feedback);
                    $row = mysqli_fetch_array($result); 
                ?>
                <form method="post" id="form">
                    <input type="text" readonly value="<?php echo $row['id']?>" name="txtid"> <br><br>
                    <input type="text" value="<?php echo $row['name']?>" name="txtname"> <br><br>
                    <input type="text" value="<?php echo $row['phone']?>" name="txtphone"> <br><br>
                    <input type="text" value="<?php echo $row['message']?>" name="txtmessage"> <br><br>
                    <input type="submit" value="Update Feedback" name="updatebtn">
                </form>
                <?php
                    if(isset($_POST['updatebtn']))
                    {
                        $id = $_POST['txtid'];
                        $name = $_POST['txtname'];
                        $phone = $_POST['txtphone'];
                        $message = $_POST['txtmessage'];
                        $update_query = "UPDATE tbl_feedback set name='name',phone='$phone',message='$message' WHERE id=$id";
                        if(mysqli_query($connection,$update_query))
                        {
                            echo "
                            <script>
                                alert('Feedback Updated');
                                window.location.href='fetch-feedback.php';
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