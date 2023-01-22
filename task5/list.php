<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header><h1>Список пользователей</h1></header>
    <div class='main-info'>
    <?php
        require 'connect.php';
        $users = mysqli_query($connect, "SELECT * FROM `users`");
        $users = mysqli_fetch_all($users);
        foreach($users as $user){
            $id = $user[0];
            echo "<a href='/web/task5/?id=". $id . "'>" . $user[1] . "</a></br>";
        }
    ?>
    </div>
    <div class='container'>
        <div class="create-button">
            <a class='button' href='/web/task5/create.php'>Create</a>
        </div>
    </div>
</body>
</html>