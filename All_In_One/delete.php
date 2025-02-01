<?php

include __DIR__ . '/config/dbcon.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = $id";


    $result = mysqli_query($connect, $query);

    if ($result) {

        header('Location: index.php');
    } else {

        die("Deleting Record Failed" . mysqli_error($connect));
    }
}
