<?php
include 'connection.php';

if(!empty($_POST)) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
 

    $sql = "INSERT INTO todo_list (name, title, description) VALUES ('$name', '$title', '$description')";
    $insertData = mysqli_query($connection,$sql);
 
    if($insertData){
      echo "The form has been successfully submitted.";
    } else {
      echo "Something went wrong!";
    }
  }
?>