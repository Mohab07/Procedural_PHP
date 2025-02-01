

<?php
include __DIR__ . '/config/dbcon.php';

if (isset($_POST['add_student'])) {

    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $age = $_POST['age'];


    if (!empty($f_name) && !empty($l_name) && !empty($age)) {

        $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$f_name', '$l_name', $age)";


        $result = mysqli_query($connect, $query);

        if ($result) {

            header('location:index.php');
        } else {

            echo "Error: " . mysqli_error($connect);
        }
    } else {
        echo "All fields are required!";
    }
}
