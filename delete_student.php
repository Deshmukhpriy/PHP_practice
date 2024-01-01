<?php

$con = mysqli_connect('localhost', 'root', '', 'my_crud');

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];
    $deleteStudent = mysqli_query($con, "DELETE FROM `student` WHERE id = $userId");
    if ($deleteUser) {
        header('Location: student_list.php');
    } else {
        echo "Not able to delete";
    }

}
?>
