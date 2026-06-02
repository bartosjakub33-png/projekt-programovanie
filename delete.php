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
include "databaza.php";

$id = $_GET["id"];

mysqli_query($conn,
    "DELETE FROM tasks WHERE id = $id");

header("Location: index.php");
?>
