<?php
include "databaza.php";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["register"])){

    $username = $_POST["usernname"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$user', '$password')";

    if (mysqli_query($conn, $sql)) {

        header("Location: login.php");
        exit();

    } else {

        echo "Error: " . mysqli_error($conn);

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrácia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Registrácia</h1>

<form method="POST">

<input type="text"
       name="username"
       placeholder="Meno"
       required>

<br>

<input type="password"
       name="password"
       placeholder="Heslo"
       required>

<br>

<button type="submit" name="register">
Registrovať
</button>

</form>

<br>

<a href="login.php">Login</a>

</div>

</body>
</html>
