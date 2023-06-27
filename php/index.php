<?php
include './connection.php';


if (!empty($_POST)) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];



    $sql = "INSERT INTO inde2_db (name, title, description) VALUES ('$name', '$title', '$description')";
    $result = mysqli_query($connection, $sql);


    if (!$result) {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    } else {
        echo '<div class="alert alert-success" role="alert">
     data Submit 
      </div>';
    }
}


$sql = "SELECT * FROM `inde2_db`";
$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2 class="text-center mt-3">data form</h2>
    <div class="container">
        <form method="POST" action="index.php">

            <div class="mb-3">
                <label class="form-label ">Name</label>
                <input type="text" class="form-control" placeholder="name" name="name" id="name" required>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title" required>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea type="text" class="form-control" placeholder="description" name="description" id="description" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                    </div>
        </form>
    </div><hr>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>title</th>
                    <th>discription</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                  <tr>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['description'] . "</td>
                        <td><button type='button' class='btn btn-success'> edit</button> <button type='button' class='btn btn-danger'> delete</button></td>
                  ";
                }
                ?>

            </tbody>
        </table>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>