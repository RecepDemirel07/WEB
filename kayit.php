<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje</title>
</head>
<body>
    <h1>Hesap Yok</h1>
    <?php
    echo $_POST["student-no"];
     
    ?>
    <br> 
    <?php
    echo $_POST["password"]; 
    ?>


    <br>
    <br>

    <?php 
    if($_POST["student-no"] == "123" && $_POST["password"] == "123"){
        echo "giriş yaptın";
    }
    ?>

    <button id="Giriş" class="btn"></button>
    <button id="Kayit" class="btn"></button>
    <button id="Cikis" class="btn"></button>
</body>
</html>