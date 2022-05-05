
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="css/style.css">
        <style>
            body {
                top: 30vh
            }
        </style>
    </head>
    <body>
        
    <?php
        $numero = $_POST['num'];

        echo "<strong>Contagem</strong><br>";   
        for($cont = 1 ; $cont <= 10 ; $cont++){
                $mult = $cont * $numero;
                echo "$cont x $numero = $mult<br>";
        };
    ?>

    </body>
</html>