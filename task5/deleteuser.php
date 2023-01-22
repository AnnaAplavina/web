<?php 
    require 'connect.php';
    $id = $_POST['id'];
    mysqli_query($connect, "DELETE FROM users WHERE `users`.`id` = $id");
    echo "Профиль удалён";
?>