<?php 
    $connect = mysqli_connect('localhost', 'root', '', 'webtask4');

    if(!$connect){
        die("Не удалось установить соединение с базой данных");
    }
?>