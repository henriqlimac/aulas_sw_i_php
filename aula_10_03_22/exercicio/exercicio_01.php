<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    
    * {
        padding: 0;
        margin: 0;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: pink;
    }

    hr.toppadding {
        color: white;
        margin-top: 20%;
    }

    h1.secondpadding {
        padding-top: 10px;
    }

    h1 {
        color: white;
    }
    
    p {
        color: white;
        font-size: 200%;
    }

    hr {
        border: white double 5px;
    }

</style>

<?php 

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $mediabase = $nota1 + $nota2 + $nota3;
    $media = $mediabase / 3;

    echo "<hr class='toppadding'>";
    echo "<h1>USUÁRIO:</h1> <p>{$nome}</p>";
    echo "<hr>";
    echo "<h1 class='secondpadding'>MÉDIA:</h1> <p>{$media}</p>";
    echo "<hr>";



?>