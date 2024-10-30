<?php 

if(isset($_GET['nome']) && isset($_GET['telefone']) && isset($_GET['email'])){
   
    $pessoa = new Pessoa();
    $pessoa->setEmail($_GET['email']);
    $pessoa->setNome($_GET['nome']);
    $pessoa->setTelefone($_GET['telefone']);
    //echo $pessoa->printObjeto();
    gravarContato($conexao,$pessoa);
    
}


$lista_contatos = buscar_contatos($conexao);

?>



       <table>
            <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($lista_contatos as $contato): ?>
                <tr>
                    <td><?php echo $contato['id'];?></td>
                    <td><?php echo $contato['nome'];?></td>
                    <td><?php echo $contato['email'];?></td>
                    <td><?php echo $contato['telefone'];?></td>
                    <td><a href="editarContato.php?id=" <?php echo $contato['id'];?>><button class="btnEditar" type="button">Editar</button></a></td>
                    <td><a href="#"><button class="btnExcluir" type="button">Excluir</button></a></td>
                </tr>

                <?php endforeach;?>  
            </tbody>

       </table>