<?php
$banco = new mysqli("localhost","root","","test",3306);
if($banco->connect_errno){
    echo "Erro ao conectar no banco de dados";
}else{
    echo "Conectado no banco de dados";
}
?>