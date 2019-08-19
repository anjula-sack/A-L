<?php
$conn = new mysqli('localhost', 'root', 'root123', 'school');
if ($conn->connect_error) {
    die("Connection Error");
}
$result = $conn->query("SELECT * FROM student");

$conn->close()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
<table border="1">
    <tr>
        <td>Index No</td>
        <td>name</td>
        <td>Phone No</td>
        <td>DOB</td>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['index_no']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone_no']; ?></td>
            <td><?php echo $row['dob']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
