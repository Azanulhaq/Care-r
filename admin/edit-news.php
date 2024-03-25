<?php
    include("connection.php");
    $id = $_GET['id'];
    $fetch_news = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_news WHERE id=$id"));
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
        border-width: 5px;
        border-radius: 15px;
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
    .page-wrapper .content .update
    {
        background-color: #009ce7;
        color: #fff;
        transition-duration: 0.4s;
        border-color: #fff;
        cursor: pointer;
    }
    .page-wrapper .content .update:hover
    {
        transform: scale(1.1);
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
                <h2 style="text-align: center;">Update / Edit News</h2><br><br>
                <form enctype="multipart/form-data" method="post">
                    <input type="text" name="txtname" placeholder="Enter Invention Name" value='<?php echo $fetch_news['name']?>'> <br><br>
                    <input type="date" name="txtdate" value='<?php echo $fetch_news['date']?>'> <br><br>
                    <img src="<?php echo $fetch_news['image']?>" style="width: 150px;"> <br><br>
                    <input type="file" name="txtimage"> <br><br>
                    <input type="submit" value="Update Invention" name="btninsert" class="update">
                </form>
                <?php 
                    if(isset($_POST['btninsert']))
                    {
                        $name = $_POST['txtname'];
                        $date = $_POST['txtdate'];
                        $imageName = $_FILES['txtimage']['name'];
                        $tmpName = $_FILES['txtimage']['tmp_name'];
                        $imagePath = "img/inventionImages/".$imageName;
                        move_uploaded_file($tmpName,$imagePath);
                        if(mysqli_query($connection,"UPDATE tbl_news SET name='$name',date='$date',image='$imagePath' WHERE id=$id"))
                        {
                            echo "
                            <script>
                                alert('News Updated');
                                window.location.href='fetch-news.php';
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