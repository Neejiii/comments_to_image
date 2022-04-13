<?php

    $driver = 'mysql';
    $host = 'localhost';
    $db_name = 'test_site';
    $db_user = 'root';
    $db_pass = 'mysql';
    $charset = 'utf8';


    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );


























//Старый код
//
//require('settings.php');
//
//
//function testT($value) {
//    echo '<pre>';
//    print_r($value);
//    echo '</pre>';
//}
//
//
//
//$sql = "SELECT * FROM users";
//$query = $pdo->prepare($sql);
//$query->execute();
//$errorInformation = $query->errorInfo();
//
//if($errorInformation[0] !== PDO::ERR_NONE) {
//    echo $errorInformation[2];
//    exit();
//}
//
//$data = $query->fetch();
//
//testT($data);

