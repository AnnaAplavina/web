<?php 
    $xml = file_get_contents("users.xml");
    $users = new SimpleXMLElement($xml);
    $count = 0; 
    foreach($users->user as $user){
        if($user['id'] == $_POST['id']){
            unset($users->user[$count]);
            break;
        }
        $count++;
    }
    $users->asXML('users.xml');
    echo "Профиль удалён";
?>