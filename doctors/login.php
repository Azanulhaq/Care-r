<?php
    include("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <title>Lab Automation</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">


</head>

<style>
    body
    {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-image:url(./img/background.png);
    }
</style>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form method='POST' autocomplete="off" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="img/favicon.png" alt=""></a> <br><br>
                            <h4 style="margin-top:20px;"><span> Taster</span> Log in </h4>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control"  name="txtusername" placeholder="Enter Username" 
                              value="<?php if(isset($_COOKIE['username']))
                              {echo $_COOKIE['username'];}?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtpassword" placeholder="Enter Password"
                              value="<?php if(isset($_COOKIE['password']))
                              {echo $_COOKIE['password'];}?>">
                        </div>
                        <div class="field">
                              <label hidden >hidden label</label>
                              <label style="margin-left: 40px;" class="form-check-label"><input type="checkbox" class="form-check-input" name="txtremember"> Remember Me</label>
                           </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="btnsubmit">Login</button>
                            </a>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="register.php">Register Now</a>
                        </div>
                    </form>
                    <?php
                         
                         if(isset($_POST['btnsubmit']))
                         {
                           $username = $_POST['txtusername'];
                           $password = $_POST['txtpassword'];

                           if(isset($_POST['txtremember']))
                           {
                              setcookie("username",$username,time()+86400*30);
                              setcookie("password",$password,time()+86400*30);
                           }
                           else
                           {
                              setcookie("username","");
                              setcookie("password","");
                           }
                           $query = "SELECT * FROM tbl_doctor WHERE
                            d_username='$username' and d_password='$password'";

                          $result = mysqli_query($connection,$query);
                          
                          if(mysqli_num_rows($result))
                          {
                            $fetch_doctor =  mysqli_fetch_array(mysqli_query($connection,"SELECT d_id from tbl_doctor WHERE d_username='$username'"));
                            $_SESSION['username'] = $fetch_doctor['d_id'];
                            header("location:index.php");
                          }
                          else
                          {
                           echo "<script>alert('Incorrect Username Or Password')</script>";
                          }
                         }
                     ?>
                </div>
			</div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>


<!-- login23:12-->
</html>