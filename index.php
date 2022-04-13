<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="assets/js/main.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <title>comments</title>

</head>
<body>


<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1> //Test comments </h1>
            </div>
        </div>
    </div>
</header>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="image_block">
    <div class="image">
        <img src="assets/python_logo.jpg" width="500" height="400">
    </div>
    <div class="text-fieldd">
        <form action="app/database/settings.php" method="POST">
            <h1 class="text1">Имя *</h1>
            <input type="text" name="name" style="display: block">
            <h1 class="text1">Добавление комментария *</h1>
            <textarea name="content" cols="40" rows="10"></textarea>
            <div class="elem-group">
                <label for="captcha">Пожалуйста, подтвердите что вы не робот</label>
                <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
                <br>
                <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
            </div>
            <input type="submit" value="Отправить">
        </form>

    </div>
</div>



<?php
    require 'app/database/db.php';
    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `users` ORDER BY `date` ');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<div class="visual">
<li class="namee"><b class="font">'.$row->date.'</b> <b class="font">'.$row->time.'</b> <b>'.$row->name.'</b> <a href="app/database/deleteFunc.php?id='.$row->id_user.'"><button>Удалить</button></a></li>
<li class="namee"><b>'.$row->text.'</b></li>
</div>';
    }
    echo '</ul>';
?>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>