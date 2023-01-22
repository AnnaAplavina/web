<?php
    require 'connect.php';
    if(!isset($_GET['id'])){
        echo("id не передан");
    }
    else{
        $id = $_GET['id'];
        $user = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");
        $user = mysqli_fetch_assoc($user);
        echo "<header><div class='container'><h1>Информация о профиле</h1></div></header>";
        echo "<div class='container'><div class='main-info'>";
        echo 'ID: '. $user['id'] . '<br>';
        echo 'ФИО: '. $user['name'] . '<br>';
        echo 'Дата Рождения: '. $user['birthdate'] . '<br>';
        echo 'Город: '. $user['city'] . '<br>';
        echo "</div></div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Index</title>
</head>
<body>
    <div class='container'>
        <div class="links">
            <a class='button' href='/web/task5/list.php<?php echo '?id='.$_GET['id'] ?>'>List</a>
            <?php 
                echo "<a class='button' href='/web/task5/update.php?id=" . $_GET['id'] . "'>Update</a>
                <a class='button' href='/web/task5/delete.php?id=" . $_GET['id'] . "''>Delete</a>"
            ?>
        </div>
    </div>
</body>
</html>