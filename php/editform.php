<?php
include './connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `inde2_db` where `id`= $id";
$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

if (($_POST)) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];


    $sql = "UPDATE `inde2_db` SET name='$name', title='$title' , description='$description' WHERE id='$id'";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo 'error in update';
    } else {
      header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <title>edit</title>
</head>

<body>
    <h2 class="text-center mt-3">data form</h2>
    <div class="container">
        <form method="POST">

            <div class="mb-3">
                <label class="form-label ">Name</label>
                <input type="text" class="form-control" placeholder="name" name="name" id="name" value="<?php echo $row['name'] ?>" required>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title" value="<?php echo $row['title'] ?>" required>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea type="text" class="form-control" placeholder="description" name="description" id="description" required><?php echo $row['description'] ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit" id="submit">update</button>
                    </div>
        </form>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>