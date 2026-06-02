<?php
session_start();

include "databaza.php";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row["pass"])) {

            $_SESSION["user_id"] = $row["id"];

            header("Location: index.php");
            exit();

        } else {

            echo "Zlé heslo!";

        }

    } else {

        echo "Používateľ neexistuje!";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Prihlásenie</h1>

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

<button type="submit" name="submit">
Prihlásiť
</button>

</form>

<br>

<a href="register.php">
Registrácia
</a>

</div>

</body>
</html>
