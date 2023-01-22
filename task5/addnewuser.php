<?php
    require 'connect.php';
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
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
        $users = mysqli_query($connect, "SELECT * FROM `users`");
        $users = mysqli_fetch_all($users);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `birthdate`, `city`) VALUES (NULL, '$name', '$birthdate', '$city')");
        $last_id = mysqli_insert_id($connect);
        header("Location: /web/task5/index.php?id=" . $last_id);
    }
?>