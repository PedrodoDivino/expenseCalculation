<?php
include('../db/conectaBanco.php');    
if(isset($_POST['email']) || isset($_POST['senha'])){
    if (strlen($_POST['email']) == 0) {
        echo  "Preencha seu email";
    }elseif (strlen($_POST['senha']) == 0){
      echo  "Preencha sua senha";
    }else {
        $email = $mysqli->real_escape_string($_POST['email']); 
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT   email, senha  FROM usuarios WHERE email = '$email'
         AND senha = '$senha'";

         $sql_query = $mysqli->query($sql_code) 
         or die("falha na execução do SQL"
        . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if( $quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
             $_SESSION['nome'] = $usuario['nome'];

             header("location: http://localhost/expenseCalculation/src/pages/cadastroMateriaPrima.php");

         } else{
            echo "falha ao logar, email ou senha incorretos";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Seja Bem vindo(a)<br>Faça seu Login</h1>
                <img src="imglogin.svg" class="left-login-imagem" alt="Financas animacao">
    </div>
        <div class="right-login">
    <div class="tela-login">
        <h1>LOGIN</h1>   
            <div class="textfield">
                <form action="" method="post">
                   <label for="email">Usuário</label>
                    <input type="text" name="email" placeholder="E-mail" required>
                </div>
                <div class="textfield">
                   <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha"  required>
                </div>
                <div class="tela-cadastro">
                    <p id="conta">Não tem uma conta? <a href="cadastroUsuario.php" target="_blank" > Crie uma Conta.</a></p>
                </div>
                  <button type="submit"  class="botao-login">Entrar</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>