<?php

$datbase_info = include __DIR__ . '/config/database.php';

$connect = mysqli_connect(
    $datbase_info['servername'],
    $datbase_info['username'],
    $datbase_info['password'],
    $datbase_info['database'],
    $datbase_info['port']
);
if (!$connect) {
    echo die("connection failed" . mysqli_connect_error());
} else {
    echo "connection success \n";
}

// $insert = "insert into users (name , password , email) values('mohab', '1234', 'mohabgaafer000@gmail.com')";
// $conn = mysqli_query($connect, $insert);
// if ($conn) {
//     echo "inserted successfully";
// } else {
//     echo "failed";
// }
// var_dump(mysqli_insert_id($connect));


// $insert = "insert into users (name , password , email) values('mohab', '1234', 'mohabgaafer1@gmail.com');";
// $insert .= "insert into users (name , password , email) values('mohab', '1234', 'mohabgaafer2@gmail.com');";
// $insert .= "insert into users (name , password , email) values('mohab', '1234', 'mohabgaafer3@gmail.com');";
// $insert .= "insert into users (name , password , email) values('mohab', '1234', 'mohabgaafer9@gmail.com');";
// $conn = mysqli_multi_query($connect, $insert);
// if ($conn) {
//     echo "inserted successfully";
// } else {
//     echo "failed";
// }
// var_dump(mysqli_insert_id($connect));
// mysqli_close($connect);


// $sql = "SELECT name FROM users";
// $query = mysqli_query($connect, $sql);
// $num = mysqli_num_rows($query);

// if ($num > 0) {
//     while ($row = mysqli_fetch_assoc($query)) {
//         echo $row['name'] . '<br>';
//     }
// }

// $sql = "select * from users where email ='mohabgaafer0@gmail.com' or password='1234' "; //we can use and or etc..
// $query = mysqli_query($connect, $sql);
// $num = mysqli_num_rows($query);
// if ($num > 0) {
//     foreach ($query as $mohab) {
//         echo $mohab['name'] . "_" . $mohab['password'] . "_" . $mohab['email'];
//     }
// }


//update query


// mysqli_query($connect, "update users set email='mostafamohamed99@gmail.com' where id='5'");
// $sql = "select * from users";
// $query = mysqli_query($connect, $sql);
// $num = mysqli_num_rows($query);

// if ($num > 0) {

//     while ($row = mysqli_fetch_assoc($query)) {
//         echo $row['email'] . "_" . $row['id']  . '<br>';
//     }
// }

//using insclusive use limit and offset
// like this $sql ="select from users limit 2 offset 1";; it shows us the second page and skip the first two and print the third id (**);;


$sql = "DELETE FROM users WHERE id='2'";
$query = mysqli_query($connect, $sql);

if ($query) {
    echo "User deleted successfully.";
} else {
    echo "Error deleting user: " . mysqli_error($connect);
}



// try {
//     $connect = mysqli_connect($datbase_info['servername'], $datbase_info['username'], $datbase_info['password']);
// } catch (Exception $e) {
//     throw new Exception($e->get_Message());
// }
