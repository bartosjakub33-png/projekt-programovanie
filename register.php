<?php
include "databaza.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if(!empty($username) && !empty($password)){

        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "
        INSERT INTO users(username, password)
        VALUES('$username', '$hashed')
        ";

        mysqli_query($conn, $sql);

        header("Location: login.php");
        exit();
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

<button type="submit">
Registrovať
</button>

</form>

</div>

</body>
</html>
