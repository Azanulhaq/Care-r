<?php
    include("connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_feedback WHERE id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Feedback Deleted');
            window.location.href='fetch-feedback.php';
        </script>";
    }

?>