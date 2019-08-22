<?php
$account = $_POST['acc_no'];

$conn = new mysqli('localhost', 'root', 'root123', 'payment');
if ($conn->connect_error) {
    die('Connection Error');
}

$result = $conn->query("SELECT * FROM pay WHERE account_number='$account'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Search</title>
</head>
<body>
<?php
while ($row = $result->fetch_assoc()){


?>


<h1>Your Payment History 2019</h1>
<table>
    <tr>
        <td>Account Number</td>
        <td>Payment Method</td>
        <td>Amount</td>
    </tr>
    <tr>
        <td><?php echo $row[' account_number']; ?></td>
        <td><?php echo $row[' payment_method']; ?></td>
        <td><?php echo $row[' amount']; ?></td>
    </tr>
    <?php


    }

    ?>
</table>
</body>
</html>
