
<?php

$db_host = "localhost:3306";
$db_user = "root";
$db_password = "";
$db_name = "e-stu";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if($conn->connect_error)
{
    die("connection failed");
}



?>