<?php require "conector.php";
$info = [];

$id = filter_input(INPUT_GET, 'id');
//se id existir execute o código
if ($id) {
    //criando a query
    $sql = $pdo->prepare("SELECT * FROM clientes where id=:id");
    //setando que :id utilizado na query é o valor da variavel $id recebida pelo método INPUT_GET no caregamento da página
    $sql->bindValue(':id', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        //puxando os dados da linha conforme o $sql fez a consulta baseado no $id
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else {
        header("Location:index.php");
        exit;
    }
}
//caso contrario retorne a index.php
else {
    header("Location:index.php");
    exit;
}
    
?>


<h1>Editar usuário</h1>
<form method="POST" action="editar_action.php">
    <label>
        Nome:
        <input type="text" name="name" value=<?=$info["nome"]?>>
    </label>
    <br>
    <label>
        E-mail:
        <input type="text" name="email" value=<?=$info["email"]?>>
    </label>
    <br><br>
    <input type="submit" value="Editar">

</form>
<button onclick="window.location.href = 'index.php'">Home</button>      