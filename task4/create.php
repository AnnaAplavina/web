<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        input{
            display:block;
            margin:auto;
            margin-top: 0.3em;
            margin-bottom: 0.3em;
        }
    </style>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1>Добавить пользователя</h1>
    </header>
    <div class="main-info">
        <form action="/web/task4/addnewuser.php" method="post">
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
    </div>
</body>
</html>