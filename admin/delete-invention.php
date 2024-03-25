<?php
    include("connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_invention WHERE id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Product Deleted');
            window.location.href='fetch-inventions.php';
        </script>";
    }

?>