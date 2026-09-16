<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (NAME, EMAIL) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
</head>

<body>

<h1>Add New User</h1>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>

    <br><br>

    <input type="submit" value="Add User">

</form>

<br>

<a href="index.php">Back to Users</a>

</body>
</html>