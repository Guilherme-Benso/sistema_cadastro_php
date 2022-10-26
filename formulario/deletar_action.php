<?php
require "conector.php";

//declarando a variavel que vai armazenar o dado para mandar para o banco
$id = filter_input(INPUT_GET, 'id');

//se estiver tudo certo continuar
if ($id) {
    $sql = $pdo->prepare("DELETE FROM clientes WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();
}
    header('Location:index.php');
    exit;
