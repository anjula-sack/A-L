<?php
$conn = new mysqli('localhost', 'root', 'root123', 'school');

if ($conn->connect_error) {
    die("Connection Error");
}
$result = $conn->query("SELECT * FROM subject");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marks</title>
</head>
<body background="3.jpg">
<form action="marks.php" method="post">
    Index No<input name="index" type="text" required/><br/>
    Subject No<select name="subject">
        <?php

        while ($row = $result->fetch_assoc()) {

            ?>
            <option value="<?php echo $row['id']; ?>">
                <?php echo $row['subject_name']; ?></option>
            <?php

        }
        ?>
    </select>
    Term <select name="term">
        <option value="1">1 term</option>
        <option value="2">2 term</option>
        <option value="3">3 term</option>
    </select><br/>
    Marks<input name="marks" type="number" max="100" min="0"/>
    <input type="submit" value="submit">
    <input type="reset" value="Clear">
</form>
</body>
</html>