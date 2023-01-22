<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        input{
            display:block;
            margin:auto;
            margin-top: 0.3em;
            margin-bottom: 0.3em;
        }
        .links-two{
            margin-top: 3em;
            padding-left: 40%;
        }
    </style>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1>Изменение профиля</h1>
    </header>
        <div class='main-info'>
            <form action="/web/task5/updateuser.php?id=<?php echo $_GET['id'] ?>" method="post">
                <?php
                    require 'connect.php';
                    $users = mysqli_query($connect, "SELECT * FROM `users`");
                    $users = mysqli_fetch_all($users);
                    foreach($users as $user){
                        if(strcmp($user[0], $_GET['id']) == 0){
                            $name = $user[1];
                            $birthdate = $user[2];
                            $city = $user[3];
                            echo "<label>ФИО </label>
                            <input type='text' name='name' value = '" . $name . "'>
                            <label>Дата Рождения</label>
                            <input type='date' name='birthdate' min='1900-01-01' value='" . $birthdate . "'>
                            <label>Город</label>
                            <input list='cities' name='city' value='" . $city . "'>
                            <datalist id='cities'>
                                <option value='Владимир'>
                                <option value='Казань'>
                                <option value='Москва'>
                                <option value='Муром'>
                                <option value='Новосибирск'>
                                <option value='Санкт-Петербург'>
                            </datalist>";
                        }
                    }
                ?>
                <button type="submit">Обновить</button>
            </form>
        </div>
        <div class='links-two'>
            <a class="button" href='/web/task5/create.php<?php echo '?id='.$_GET['id'] ?>'>Create</a>
            <a class="button" href='/web/task5/delete.php<?php echo '?id='.$_GET['id'] ?>'>Delete</a>
        </div>
</body>
</html>