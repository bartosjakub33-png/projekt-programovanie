<?php
session_start();

include "databaza.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "
    SELECT * FROM users
    WHERE username='$username'
    ";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user["password"])){

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];

        header("Location: index.php");
        exit();

    } else {

        echo "Nesprávne meno alebo heslo";
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

<button type="submit">
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
