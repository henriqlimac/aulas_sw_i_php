
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
        $cubo = pow($numero,3);

        echo "<strong>Contagem</strong><br>";   
        for($cont = $numero ; $cont <= 27 ; $cont++){
            if($cont % 2 == 1){
                echo "$cont <br>";
            };
        };
    ?>

    </body>
</html>