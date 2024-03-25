<?php
    include("connection.php");
    $id = $_GET['did'];
    $query = "DELETE FROM tbl_doctor WHERE d_id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Doctor Deleted');
            window.location.href='fetch-doctor.php';
        </script>";
    }

?>