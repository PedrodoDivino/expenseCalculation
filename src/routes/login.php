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