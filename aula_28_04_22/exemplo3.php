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
        <div class="php">
            <?php
                echo "<strong>Contagem Progressiva⠀⠀</strong> <br> <br>";
                for($cont=0;$cont<=10;$cont++){
                    echo "A variável \$cont vale $cont<br>";
                }

                echo "<br> <br>";

                echo "<strong>⠀⠀⠀⠀⠀⠀⠀Contagem Regressiva⠀⠀</strong> <br> <br>";
                for($cont=10;$cont>=0;$cont--){
                    echo "A variável \$cont vale $cont<br>";
                }
            ?>
        </div>
    </body>
</html>