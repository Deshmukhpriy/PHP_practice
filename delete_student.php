<?php

$con = mysqli_connect('localhost', 'root', '', 'my_crud');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $deleteUser = mysqli_query($con, "DELETE FROM `user` WHERE id = $userId");
    if ($deleteUser) {
        header('Location: user_list.php');
    } else {
        echo "Not able to delete";
    }

}
?>
