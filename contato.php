<?php 
session_start();

include "banco.php";
include "Pessoa.php";


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assests/css/main.css">
    <script src="assests/js/main.js"></script>
</head>
<body>
  <?php include('formularioCOntato.php');
   $exibir_tabela = true; 
   ?>

   <br/>
   <br/>
   
<?php
   if($exibir_tabela){
        include('gridContato.php');
   }
  
  
  
  
  ?>   
  

    </form>

</body>
</html>

<?php 

function buscar_contatos($conexao){
    $sql ="SELECT * FROM contato";

    $resultado = mysqli_query($conexao, $sql);
    $contatos = array();

    while($contato = mysqli_fetch_assoc($resultado)){
            $contatos[] = $contato;
    }

    return $contatos;

}


function gravarContato($conexao, $pessoa){

    $sqlInsert = "INSERT INTO contato (nome, email, telefone) VALUES ('{$pessoa->getNome()}', '{$pessoa->getEmail()}', '{$pessoa->getTelefone()}');";
    
    //print_r($sqlInsert);

    mysqli_query($conexao,$sqlInsert);
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=contato.php'>";

}
    


?>