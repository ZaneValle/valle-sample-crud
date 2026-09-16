<?php
require_once "db.php";

$result = $conn->query("SELECT * FROM users ORDER BY ID DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sample CRUD</title>
</head>

<body>

<h1>Sample CRUD Application</h1>

<a href="create.php">Add New User</a>

<br><br>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>

    <tr>
        <td><?php echo $row["ID"]; ?></td>
        <td><?php echo $row["NAME"]; ?></td>
        <td><?php echo $row["EMAIL"]; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row["ID"]; ?>">Edit</a>
            |
            <a href="delete.php?id=<?php echo $row["ID"]; ?>">Delete</a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>