    <?php
    session_start();
    include('../db/conectaBanco.php');    

    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $numerCelular = mysqli_real_escape_string($mysqli, trim($_POST['numeroCelular']));
    $dataNascimento = mysqli_real_escape_string($mysqli, trim($_POST['data']));
    $numeroResidencia = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $endereco = mysqli_real_escape_string($mysqli, trim($_POST['endereco']));
    $senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));
    $usuario = mysqli_real_escape_string($mysqli, trim($_POST['usuario']));
    
    $sql_code = "select count(*) as total from usuarios where usuario = '$usuario'";
    $result = mysqli_query($sql_code);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
$_SESSION['usuario_existe'] = true;
    header('Location: http://localhost/expenseCalculation/src/pages/ ')
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
<link rel="stylesheet" href="../styles/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
        <div class="form-image">
            <img src="imgcadastro.svg" alt="">
        </div>
        <div class="form">
            <form action="">
                <div class="form-header">
                    <div class="title">
                        <h1>Criar Conta</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu Nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="E-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="numeroCelular">Telefone Celular</label>
                        <input id="numeroCelular" type="tel" name="numeroCelular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="data">Data Nascimento</label>
                        <input id="data" type="date" name="data" placeholder="xx/xx/xxxx">
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" placeholder="Digite sua Rua" required>
                    </div>

                    <div class="input-box">
                        <label for="numero">Número</label>
                        <input id="numero" type="number" name="numero" placeholder="Digite o Número" required>
                    </div>


                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Digite seu Bairro" required>
                    </div>
                        <div class="input-box">
                        <label for="complemento">Complento</label>
                        <input id="complemento" type="text" name="complemento" placeholder="Digite seu complemento" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required minlength="8" maxlength="100">
                    </div>

                </div>

                <div class="entrar-button">
                 <button type="submit" >Cadastrar
                </button> 
                </div>
            </form>
        </div>
    </div>
</body>
</html> 