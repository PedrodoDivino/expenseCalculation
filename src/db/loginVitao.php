<?php 
require_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM USER WHERE email = '$email' AND senha = '$senha'";
$consulta = mysqli_query($conexao, $sql);

var_dump($consulta->num_rows > 0);

if($consulta->num_rows > 0) {
    session_start();
    $_SESSION['email'] = $email;
    header("location: http://localhost/");
}
else{
    echo "senha ou email errado tente novamente";
    header("Location: ../paginas/login.page.php");
}

$conexao->close();
?>