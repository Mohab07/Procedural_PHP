
<?php
require __DIR__ . '/config/dbcon.php';
if (isset($_POST['add_student'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photo = $_FILES['photo']['name'];
        $target_file = "uploads/" . $photo;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
            $query = "INSERT INTO students (first_name, last_name, age, photo) VALUES ('$first_name', '$last_name', '$age', '$photo')";
            if (mysqli_query($connect, $query)) {
                header('Location: index.php');
                exit();
            } else {
                echo "Failed to upload image.";
            }
        } else {
            echo "No file uploaded or upload error.";
        }
    }
}
