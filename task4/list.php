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
        $xml = file_get_contents("users.xml");
        $users = new SimpleXMLElement($xml);
        foreach($users->user as $user){
            $id = $user["id"];
            echo "<a href='/web/task4/?id=". $id . "'>" . $user->name . "</a></br>";
        }
    ?>
    </div>
    <div class='container'>
        <div class="create-button">
            <a class='button' href="/web/task4/create.php">Create</a>
        </div>
    </div>
</body>
</html>