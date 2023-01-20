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
        $new = $users->addChild('user');
        $maxid = 1;
        foreach($users->user as $user){
            If(intval($user['id']) > $maxid){
                $maxid = intval($user['id']);
            }
        }
        $new->addAttribute('id', $maxid+1);
        $new->addChild('name', $name);
        $new->addChild('birthdate', $birthdate);
        $new->addChild('city', $city);
        $users->asXML('users.xml');
        header("Location: /web/task4/index.php?id=".$maxid+1);
    }
?>