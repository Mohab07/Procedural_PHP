<?php
include __DIR__ . '/config/dbcon.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($connect, $query);


    if ($result) {
        $student = mysqli_fetch_assoc($result);
    } else {
        die("Query failed: " . mysqli_error($connect));
    }
}


if (isset($_POST['update_student'])) {
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];
    $age =  $_POST['age'];


    $query = "UPDATE students SET first_name = '$first_name', last_name = '$last_name', age = '$age' WHERE id = $id";

    if (mysqli_query($connect, $query)) {

        header('Location: index.php');
    } else {
        die("Update failed: " . mysqli_error($connect));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Student</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Update Student</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo $student['first_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo $student['last_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $student['age']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success" name="update_student">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>