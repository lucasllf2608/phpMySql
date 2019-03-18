<?php 

$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'crud';

$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)){
    echo "Tivemos problemas";
    die();
}



?>