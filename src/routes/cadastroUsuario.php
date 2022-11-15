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

   $insertEndereco = "INSERT INTO enderecos (cep, logradouro, numero, bairro, complemento)
    VALUES ('$cep', '$logradouro', '$numero', '$bairro', '$complemento')";

$mysqli->query($insertUser);
$mysqli->query($insertEndereco);

   header("location: http://localhost/expenseCalculation/src/pages?cadastroStatus=sucess");

  ?>