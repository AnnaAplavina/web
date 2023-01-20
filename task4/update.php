<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display:block;
            margin: 0.3em;
        }
    </style>
</head>
<body>
    <form action="/web/task4/updateuser.php?id=<?php echo $_GET['id'] ?>" method="post">
        <h2>Создать пользователя</h2>

        <?php
            $users = new SimpleXMLElement(file_get_contents("users.xml"));
            foreach($users->user as $user){
                if(strcmp($user['id'], $_GET['id']) == 0){
                    $name = $user->name;
                    $birthdate = $user->birthdate;
                    $city = $user->city;
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
</body>
</html>