<?php 

//$bdServidor = '127.0.0.1';
$servername = "localhost";
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'crud';

//$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha, $bdBanco);


$conexao = new mysqli($servername,$bdUsuario,$bdSenha, $bdBanco);

if($conexao->connect_error){
    echo "Tivemos problemas";
    die();
}

echo "Conexão feita"


?>