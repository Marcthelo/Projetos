<?php 
if(isset($_POST['submit'])){
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,senha,email,telefone,genero,data_nascimento,cidade,estado,cep) VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nascimento','$cidade','$estado','$cep')");

    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(0,132,255), rgb(0,0,255));
}
.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0,0,0,0.8);
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}
fieldset{
    border: 3px solid dodgerblue;
}
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .3s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
   top: -20px; 
   font-size: 12px;
   color: dodgerblue;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;

}
#submit{
background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
width: 45%;
color: white;
border: none;
padding: 15px;
font-size: 15px;
cursor: pointer;
border-radius: 10px;
}
#reset{
    background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
    width: 45%;
    border: none;
    padding: 15px;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
    color: white;
}
#reset:hover{
    background-image: linear-gradient(to right, rgb(0, 62, 133), rgb(59, 14, 143));
}
#submit:hover{
    background-image: linear-gradient(to right, rgb(0, 62, 133), rgb(59, 14, 143));
}
                a{
                    text-decoration: none;
                    color: white;
                    background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
                    border: none;
                    padding: 15px;
                    width: 100%;
                    border-radius: 10px;
                    color: white;
                    font-size: 15px;
                }
                a:hover{
                    background-image: linear-gradient(to right, rgb(0, 62, 133), rgb(59, 14, 143));
                        cursor: pointer;
                    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><strong>Formulário De Clientes</strong></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="name" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="password" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Gênero: </p>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br><br>
                <label for="data_nascimento">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="city" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="state" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Enviar">
                <input type="reset" name="reset" id="reset" value="Limpar">
            </fieldset>
        </form>
        <br>
        <a href="home.php">Voltar</a>
    </div>
</body>

</html>