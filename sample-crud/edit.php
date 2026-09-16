<?php
require_once "db.php";

$id = $_GET["id"];

$result = $conn->query("SELECT * FROM users WHERE ID = $id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "UPDATE users 
            SET NAME = '$name', EMAIL = '$email' 
            WHERE ID = $id";

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
    <title>Edit User</title>
</head>

<body>

<h1>Edit User</h1>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row["NAME"]; ?>" required>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row["EMAIL"]; ?>" required>

    <br><br>

    <input type="submit" value="Update User">

</form>

<br>

<a href="index.php">Back to Users</a>

</body>
</html>