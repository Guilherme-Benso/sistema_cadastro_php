<?php
require "conector.php";

//declarando a variavel que vai armazenar o dado para mandar para o banco
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//se estiver tudo certo continuar
if ($id && $name && $email) {
    $sql = $pdo->prepare("UPDATE clientes SET nome = :name, email = :email WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->execute();
    header("Location: index.php");
    exit;
}
else {
    header('Location:adicionar.php');
    exit;
}
