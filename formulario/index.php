<?php
require "conector.php";
require "dao/UsuarioDaoMySQL.php";
$usuarioDao = new UsuarioDaoMySQL($pdo); 
$lista = $usuarioDao->findAll();

?>
<a href="adicionar.php">ADICIONAR USUÀRIO</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>nome</th>
        <th>email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $usuario):  ?> 
        <!--//mostrando os dados  -->
        <tr>    
            <td><?=$usuario->getId();?></td>
            <td><?=$usuario->getNome();?></td>
            <td><?=$usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?=$usuario["id"];?>">[ Editar ]</a>
                <a href="deletar_action.php?id=<?=$usuario["id"];?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
            
    <?php endforeach; ?>
</table>
