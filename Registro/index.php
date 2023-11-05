<?php
if(isset($_POST['submit']))
{
    include_once('confing.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,data_nascimento,estado,cidade,endereco,genero,cpf,rg) VALUES ('$nome', '$email', '$telefone','$data_nascimento', '$estado', '$cidade', '$endereco','$genero','$cpf','$rg')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="index.php" method="POST">
        <fieldset>
            <legend><b>Fórmulario de Clientes</b></legend>
            <br>
            <!-- Nome Completo -->
            <div class="inputBox">
                <input type="text" name="nome" id="nome" itemid="inputUser" required>
                <label for="nome">Nome Completo</label>
            </div>
            <br>
            <!-- #Email-->
            <div class="inputBox">
                <input type="email" name="email" id="email" itemid="inputUser" required>
                <label for="email">Email</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" itemid="inputUser" required>
                <label for="telefone">Telefone</label>
            </div>
            <br>
            <!--Sexo -->
            <p>Sexo: </p>
            <input type="radio" name="genero" value="feminino" required id="feminino">
            <label for="feminino">Feminino</label> <br>
            <input type="radio" name="genero" value="masculino" required id="masculino">
            <label for="masculino">Masculino</label> <br>
            <input type="radio" name="genero" value="outro" required id="outro">
            <label for="outro">Outro</label>
            <br>
            <!-- Data de Nascimento-->
            <div class="inputBox">
                <label for="data_nascimento">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" itemid="inputUser" required>
            </div>
            <br>
            <!-- Estado-->
            <div class="inputBox">
                <input type="text" name="estado" id="estado" itemid="inputUser" required>
                <label for="estado">Estado</label>
            </div>
            <br>
            <!-- Cidade -->
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" itemid="inputUser" required>
                <label for="cidade">Cidade</label>
            </div>
            <br>
            <!-- Endereço-->
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" itemid="inputUser" required>
                <label for="endereco">Endereço</label>
            </div>
            <br>
            <!-- Cpf-->
            <div class="inputBox">
                <input type="text" name="cpf" id="cpf" itemid="inputUser" required>
                <label for="cpf">CPF</label>
            </div>
            <br>
            <!-- RG-->
            <div class="inputBox">
                <input type="text" name="rg" id="rg" itemid="inputUser" required>
                <label for="rg">RG</label>
            </div>
            <br>
            <input type="submit" name="submit" id="submit" value="Enviar">
        </fieldset>
           </form>
</body>
</html>
