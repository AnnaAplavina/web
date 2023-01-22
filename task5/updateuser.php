<?php 
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    $id = $_GET['id'];
    if($name == ""){
        echo "Пожалуйста, введите фио";
    }
    else if($birthdate == ""){
        echo "Пожалуйста, укажите дату рождения";
    }
    else if($city == ""){
        echo "Пожалуйста, выбирите город";
    }
    else{
        require 'connect.php';
        mysqli_query($connect, "UPDATE `users` SET `name` = '$name', `birthdate` = '$birthdate', `city` = '$city' WHERE `users`.`id` = $id");
        header("Location: /web/task5/index.php?id=".$id);
    }
?>