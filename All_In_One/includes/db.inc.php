<?php

define("servername", "localhost");
define("username", "root");
define("password", "");
define("database", "loginpage");

$connect = mysqli_connect(servername,  username, password, database);

if (!$connect) {
    echo die("connection faild" . mysqli_connect_error());
}
