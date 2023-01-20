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
    <form action="/web/task4/addnewuser.php" method="post">
        <h2>Создать пользователя</h2>
        <label>ФИО </label>
        <input type="text" name="name">
        <label>Дата Рождения</label>
        <input type="date" name="birthdate" min="1900-01-01">
        <label>Город</label>
        <input list="cities" name="city">
        <datalist id="cities">
            <option value="Владимир">
            <option value="Казань">
            <option value="Москва">
            <option value="Муром">
            <option value="Новосибирск">
            <option value="Санкт-Петербург">
        </datalist>
        <button type="submit">Создать</button>
    </form>
</body>
</html>