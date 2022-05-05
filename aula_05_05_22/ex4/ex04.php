
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
    <?php
        $numero = $_POST['num'];
        $result = 1;
        echo "<strong>Contagem</strong><br>";   
        for($cont = $numero ; $cont >=1 ; $cont--){
            $result *= $cont;
            echo "CONTADOR ==> $cont = $result <br>";
        };
    ?>

    </body>
</html>