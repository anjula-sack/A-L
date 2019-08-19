<?php
$index = $_POST['index'];
$term = $_POST['term'];
$conn = new mysqli('localhost', 'root', 'root123', 'school');

$result = $conn->query("SELECT subject.subject_name,term_marks.marks FROM subject INNER JOIN term_marks ON subject.id=term_marks.subject_id WHERE term_marks.index_no='$index' AND term_marks.term='$term'
");
?>

<html>
<head></head>
<body>
<table border="1">
    <tr>
        <td>Subject</td>
        <td>Marks</td>
    </tr>

    <?php
    $total = 0;
    while ($row = $result->fetch_assoc()) {
    $total += $row['marks'];
    ?>
    <tr>
        <td><?php echo $row['subject_name']; ?></td>
        <td><?php echo $row['marks']; ?></td>
        <?php

        }
        ?>
    </tr>
    <tr>
        <td>Total</td>
        <td><?php
            echo $total; ?></td>
    </tr>
</table>

</body>
</html>




