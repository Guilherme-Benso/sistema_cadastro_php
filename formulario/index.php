<?php
require "conector.php";
$lista = [];

$sql = $pdo->query("SELECT * FROM clientes");
if ($sql->rowCount() > 0) {
    //transformando os dados em um array, o FETCH_ASSOC associa os campos
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
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
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario["id"];?>">[ Editar ]</a>
                <a href="deletar_action.php?id=<?=$usuario["id"];?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
            
    <?php endforeach; ?>
</table>
