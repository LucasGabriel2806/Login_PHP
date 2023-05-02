<?php
    session_start();   
    //print_r($_SESSION); 

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email']; 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SISTEMA | LOGIN</title>
    <style>
        body{
            color: white;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
        }
        


    </style>
</head>
<body>
    
    <a href="sair.php">Sair</a>

    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>

</body>
</html>