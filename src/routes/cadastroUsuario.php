  <?php
    include '../db/conectabanco.php';
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $data_nascimento = $_POST['data_nascimento'];
   $telefone_celular = $_POST['telefone_celular'];
   $bairro = $_POST['bairro'];
   $numero = $_POST['numero'];
   $complemento = $_POST['complemento'];
   $cep = $_POST['cep'];
   $logradouro= $_POST['logradouro'];

   $insertUser = "INSERT INTO usuarios (nome, email,senha, data_nascimento, telefone_celular)
    VALUES ('$nome', '$email', '$senha', '$data_nascimento', '$telefone_celular')";

    if ($mysqli->query($insertUser) == true) {
        $last_id = $mysqli->insert_id;

        var_dump($last_id);
   $insertEndereco = "INSERT INTO enderecos (usuario_id, cep, logradouro, numero, bairro, complemento)
    VALUES ('$last_id', '$cep', '$logradouro', '$numero', '$bairro', '$complemento')";

    $mysqli->query($insertEndereco);

    } else {
        echo "Error: <br>" . $mysqli->error;
        exit;
    }


   header("location: http://localhost/expenseCalculation/src/pages?cadastroStatus=sucess");

  ?>