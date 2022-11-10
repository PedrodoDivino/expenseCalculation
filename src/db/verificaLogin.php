<?php 
    include '../db/conectabanco.php';
    $usuario = $_POST ['usuario'];
    $senha = $_POST ['senha'];
    $sql = "SELECT * FROM USER WHERE email = '$usuario' AND senha = '$senha'";
    $conect=mysqli_query($banco, $sql);  
    echo $usuario, $senha;
    

?>

