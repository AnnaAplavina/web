<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/web/task4/deleteuser.php" method="post">
        <button name="id" value=<?php echo "'" . $_GET['id'] . "'" ?>>Удалить</button>
    </form>
    <a href=<?php echo "'/web/task4/index.php?id=" . $_GET['id'] . "'" ?>>Назад</a>
</body>
</html>