<?php
$account_no = $_POST['acc_no'];
$amount = $_POST['amount'];
$method = $_POST['method'];


$conn = new mysqli('localhost', 'root', 'root123', 'payment');

if ($conn->connect_error) {
    die("Connection Error");
}

$result = $conn->query("INSERT INTO pay(account_number,payment_method,amount) VALUES ('$account_no','$method','$amount')");

if ($result === true) {
    echo "Payment Success";
} else {
    echo "error:" . "</br>" . $conn->error;
}

$conn->close();

?>

<html>
<head></head>
<body>
<h1></h1>
</body>
</html>
