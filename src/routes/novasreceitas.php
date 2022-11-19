<?php
include('../db/conectaBanco.php');

    $margem_lucro = $_POST['margem_lucro'];
    $nome = $_POST['nome']; 
    $embalagem = $_POST['embalagem']; 
    $data_producao= $_POST['data_producao'];
    
    $insertNovasReceitas = "INSERT INTO receitas ( margem_lucro, nome, embalagem, data_producao)
    VALUES ('$margem_lucro', $nome', '$embalagem', '$data_producao')";

    $mysqli->query($insertNovasReceitas);

?>

