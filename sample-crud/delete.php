<?php
require_once "db.php";

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>