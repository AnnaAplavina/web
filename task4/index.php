<?php
    if(!isset($_GET['id'])){
        echo("id не передан");
    }
    else{
        $xml = file_get_contents("users.xml");
        $users = new SimpleXMLElement($xml);
        foreach($users->user as $user){
            if(strcmp($user['id'], $_GET['id']) == 0){
                echo 'ID: '. $user['id']. '<br>';
                echo 'ФИО: '. $user->name. '<br>';
                echo 'Дата Рождения: '. $user->birthdate. '<br>';
                echo 'Город: '. $user->city. '<br>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    <div class="links">
        <a href="/web/task4/list.php">List</a>
        <?php 
            echo "<a href='/web/task4/update.php?id=" . $_GET['id'] . "'>Update</a>
            <a href='/web/task4/delete.php?id=" . $_GET['id'] . "''>Delete</a>"
        ?>
    </div>
</body>
</html>