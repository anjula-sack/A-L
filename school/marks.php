<?php
$index = $_POST['index'];
$subject = $_POST['subject'];
$term = $_POST['term'];
$marks = $_POST['marks'];

$conn = new mysqli('localhost', 'root', 'root123', 'school');

if ($conn->connect_error) {
    die("Connection Error");
}
$result = $conn->query("INSERT INTO term_marks(index_no,subject_id,term,marks) VALUES('$index','$subject','$term','$marks') ");

if ($result === true) {
    echo "Record Added Successfully";
} else {
    echo "error:" . "</br>" . $conn->error;
}
$conn->close()
?>