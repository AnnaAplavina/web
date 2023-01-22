<?php 
    require 'connect.php';
    $id = $_POST['id'];
    mysqli_query($connect, "DELETE FROM users WHERE `users`.`id` = $id");
    header('Location: /web/task5/list.php');
?>