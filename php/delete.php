<?php
include './connection.php';
$id = $_GET['id'];
   
    $sql = "DELETE FROM `inde2_db` where id='$id'";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo 'error in delete';
    } else {
        header('location:index.php');
      }
?>