<?php
$driver = 'mysql';
$host = 'localhost';
$db_name = 'test_site';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$form = $_POST;
$name = $form['name'];
$content = $form['content'];
$date = date("Y-m-d");
$time = date("h:i:s");




try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );
    if (empty($_POST['name'])) exit("Поле не заполнено");
    if (empty($_POST['content'])) exit("Поле не заполнено");

    $sql = "INSERT INTO users (id_user, name, text, date, time ) VALUES (NULL , :name, :content, :date, :time)";
    $add = $pdo->prepare($sql);
    $add->bindParam(":name", $name);
    $add->bindParam(":content", $content);
    $add->bindParam(":date", $date);
    $add->bindParam(":time", $time);
    $add->execute();

//    $a = $pdo->exec($sql);

//    $query = "INSERT INTO users VALUES (NULL , :name)";
//    $msg = $pdo->prepare($query);
//    $msg->execute(['name' => $_POST['name']]);
//    $msg_id = $pdo->lastInsertId();

    header('Location: /dynamic_site');
}catch (PDOException $i) {
    echo "error" .$i->getMessage();
}
