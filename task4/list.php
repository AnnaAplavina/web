<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $xml = file_get_contents("users.xml");
        $users = new SimpleXMLElement($xml);
        foreach($users->user as $user){
            $id = $user["id"];
            echo "<a href='/web/task4/?id=". $id . "'>" . $user->name . "</a></br>";
        }
    ?>
    <a href="/web/task4/create.php">Create</a>
</body>
</html>