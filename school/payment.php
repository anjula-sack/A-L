<?php
$account = $_POST['acc_no'];

$conn = new mysqli('localhost', 'root', 'root123', 'payment');
if ($conn->connect_error) {
    die('Connection Error');
}

$result = $conn->query("SELECT * FROM pay WHERE account_number='$account'");


$row = $result->fetch_assoc()


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Search</title>
</head>
<body>


<h1>Your Payment History 2019</h1>
<table border="1">
    <tr>
        <td>Account Number</td>
        <td>Payment Method</td>
        <td>Amount</td>
    </tr>
    <tr>
        <td><?php echo $row['account_number']; ?></td>
        <td><?php echo $row['payment_method']; ?></td>
        <td><?php echo $row['amount']; ?></td>
    </tr>

</table>
</body>
</html>
