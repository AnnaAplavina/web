<?php 
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    if($name == ""){
        echo "Пожалуйста, введите фио";
    }
    else if($birthdate == ""){
        echo "Пожалуйста, укажите дату рождения";
    }
    else if($city == ""){
        echo "Пожалуйста, выбирите город";
    }
    else{
        $xml = file_get_contents("users.xml");
        $users = new SimpleXMLElement($xml);
        foreach($users->user as $user){
            if($user['id'] == $_GET['id']){
                $user->name = $name;
                $user->birthdate = $birthdate;
                $user->city = $city;
            }
        }
        $users->asXML('users.xml');
        header("Location: /web/task4/index.php?id=".$_GET['id']);
    }
?>