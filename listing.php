<?php
include 'config.php';

$query = "SELECT * FROM hotel";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>User List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>hotel-name</th>
                    <th>hotel-type</th>
                    <th>facilities</th>
                    <th>status</th>
                    <th>description</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <body>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['hotel-name'] . "</td>";
                    echo "<td>" . $row['hotel-type'] . "</td>";
                    echo "<td>" . $row['facilities'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td><img src='uploads/" . $row['id'] . "." . pathinfo($row['image'], PATHINFO_EXTENSION) . "' height='50'></td>";
                    echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this user?');\">Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </body>
        </table>
    </div>
</body>
</html>

<?php
$db->close();
?>




