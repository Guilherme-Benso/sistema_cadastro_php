<?php
require "conector.php";

//declarando a variavel que vai armazenar o dado para mandar para o banco
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//se estiver tudo certo continuar
if ($name && $email && $id) {
    $sql = $pdo->prepare("UPDATE clientes SET nome = :name, email = :email where id = :id");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":id",$id);
    $sql->execute();
    header("Location:index.php");
    exit;
}
else {
    //header('Location:adicionar.php');
    //exit;
}
