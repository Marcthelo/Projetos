<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="testLogin.php" method="POST">
            <h1>Login</h1>
            <input type="text" placeholder="E-mail" name="email" required>
            <br><br>
            <input type="password" placeholder="Senha" name="senha" required>
            <br><br>
            <input type="submit" id="inputSubmit" name="submit" value="Logar">
    </form>
    <br><br>
    <a href="home.php">Voltar</a>
    </div>
    <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(to right, rgb(0,132,255), rgb(0,0,255) );
            }
            div{
                background-color: rgba(0,0,0,0.6);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 80px;
                border-radius: 15px;
                color: white;
                }
                input{
                    padding:15px;
                    border: none;
                    outline: none;
                    font-size: 15px;
                }
                a{
                    text-decoration: none;
                    color: white;
                    background-color: dodgerblue;
                    border: none;
                    padding: 15px;
                    width: 100%;
                    border-radius: 10px;
                    color: white;
                    font-size: 15px;
                }
                a:hover{
                    background-color: deepskyblue;
                        cursor: pointer;
                }
                #inputSubmit{
                    background-color: dodgerblue;
                    border: none;
                    padding: 15px;
                    width: 100%;
                    border-radius: 10px;
                    color: white;
                    font-size: 15px;
                }
                #inputSubmit:hover{
                        background-color: deepskyblue;
                        cursor: pointer;
                }
    </style>
</body>
</html>