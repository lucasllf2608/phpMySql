<link rel="stylesheet" type="text/css" media="screen" href="assests/css/main.css">
<script src="assests/js/main.js"></script>


<?php  $exibir_tabela= false; ?>
<h1>Editar Contato</h1>

<form>
       <fieldset>
            <legend>Dados Contato</legend>
        <p>
        <label>Nome</label>
        <input type="text" id="nome" name="nome"/>
        </p>

        <p>
        <label>Email</label>
        <input type="email" id="email" name="email"/>
        </p>
        
        <p>
        <label>Telefone</label>
        <input type="text" id="telefone" name="telefone" class="telefone"/>
        </p>


            <button type="submit" class="btnEditar">Editar</button>
            <a href="contato.php"><button type="button" class="btnExcluir">Voltar</button></a>
       </fieldset>

   