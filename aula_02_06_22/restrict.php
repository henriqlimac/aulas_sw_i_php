<?php
    session_start();
    if ($_SESSION['logado'] != 1){
        header('Location: index.html');
    }    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>ESSA É UMA PÁGINA RESTRITA</h1>
        <a href="logout.php">LEAVE</a>
    </body>
</html>
