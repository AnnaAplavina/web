<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .button{
            margin-top: 3em;
            margin-left: 45%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Удалить профиль?</h1>
    </header>
    <div class='main-info'>
        <?php
            require 'connect.php';
            $id = $_GET['id'];
            $user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");
            $user = mysqli_fetch_assoc($user); 
            echo "<p>" . $user['name'] . "</p>";
        ?>
        <form action="/web/task5/deleteuser.php" method="post">
            <button name="id" value=<?php echo "'" . $_GET['id'] . "'" ?>>Удалить</button>
        </form>
    </div>
    <a class='button' href=<?php echo "'/web/task5/index.php?id=" . $_GET['id'] . "'" ?>>Назад</a>
</body>
</html>