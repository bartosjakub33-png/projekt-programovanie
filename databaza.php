<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "todo_app";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Chyba pripojenia: " . mysqli_connect_error());
}
?>
