<?php

$user = $_POST['user'];
$password = $_POST['password'];
$erro = $_POST['erro'];

$us = 'Kini';
$pw = 'vivianteamo';

if (($us == $user) && ($pw == $password)) {
    session_start();
    $_SESSION['u'] = $user;
    $_SESSION['logado'] = 1;
    header('Location: restrict.php');
} elseif ($_SESSION['logado'] != 1){
    header('Location: index.html');
    
}


