<?php
    include("connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_news WHERE id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('News Deleted');
            window.location.href='fetch-news.php';
        </script>";
    }

?>