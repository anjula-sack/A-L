<?php
$name = $_POST['name'];
$phone_no = $_POST['phone_no'];
$date = $_POST['date'];

$conn = new mysqli('localhost', 'root', 'root123', 'school');
if ($conn->connect_error) {
    die("Connection Error");
}
$result = $conn->query("INSERT INTO student(name,phone_no,dob) VALUES('$name','$phone_no','$date') ");

if ($result === true) {
    echo "Record Added Successfully";
} else {
    echo "error:" . "</br>" . $conn->error;
}
$conn->close()
?>
