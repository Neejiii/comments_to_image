<?php

require 'db.php';

$id = $_GET['id'];
$Sql = 'DELETE FROM `users` WHERE `id_user` = :id';
$Query = $pdo->prepare($Sql);
$Query->execute(['id'=>$id]);
header('Location: /dynamic_site');
?>
