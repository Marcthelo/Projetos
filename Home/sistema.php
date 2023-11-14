<?php 
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email']
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(0,132,255), rgb(0,0,255));
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <?php 
        echo "<h1>Bem vindo(a) <u>$logado<u/></h1>";
    ?>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
</body>
</html>
