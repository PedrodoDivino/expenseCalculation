<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/login.css"> 
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Seja Bem vindo(a)<br>Faça seu Login</h1>
            <img src="financas.svg" class="left-login-imagem" alt="Financas animacao">
        </div>
        <div class="right-login">
        <div class="tela-login">
                <h1>LOGIN</h1>   
            <div class="textfield">
                   <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="E-mail">
                </div>
                <div class="textfield">
                   <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="tela-cadastro">
                <p id="conta">Não tem uma conta? <a href="cadastro.php" target="_blank" > Crie uma Conta.</a></p>
                </div>
                <a href="materia-prima.php"><button class="botao-login">Entrar</button></a>
            </div>
        </div>
    </div>
</body>
</html>