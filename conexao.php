<?php
/*variaveis de conexão com o mysql*/
$servidor ="localhost";
$usuario = "root";
$senha = "";
$banco ="crud_produtos";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conexao){
    die("Erro de conexão:.mysqli_conect_error()");
    }
?>