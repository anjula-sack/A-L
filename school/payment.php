<?php
$account = $_POST['acc_no'];

$conn = new mysqli('localhost', 'root', 'root123', 'payment');
if ($conn->connect_error) {
    die('Connection Error');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Search</title>
</head>
<body>
<h1>Your Payment History 2019</h1>

</body>
</html>
