<?php
// Variáveis de conexão com o MySQL
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "crud_produtos";

// Conectar ao banco
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificar conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Definir charset para aceitar acentos
mysqli_set_charset($conexao, "utf8");
?>
