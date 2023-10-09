<?php
    include 'connection.php';
    $id=$_GET['id'];
    $query = "DELETE FROM crud12 WHERE id='$id'";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        header ('location: display.php');
    }
    else 
    {
        echo "Invalid Data";
    }
?>