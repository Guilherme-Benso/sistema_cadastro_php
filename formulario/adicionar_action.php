<?php
require "conector.php";

//declarando a variavel que vai armazenar o dado para mandar para o banco
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//se estiver tudo certo continuar
if ($name && $email) {
    //verificando se tem algum email igual
    $sql = $pdo->prepare("SELECT * from clientes where email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();
    //se não tiver email igual fazer o insert
    if ($sql->rowCount() === 0) {
        //fazendo o insert 
        $sql = $pdo->prepare("INSERT INTO clientes (nome,email) VALUES (:name, :email)");
        $sql->bindValue(":name", $name);

        //bindParam recebe o valor da variavel, podendo ser trocado o valor
        $sql->bindParam(":email", $email);
        $sql->execute();

        header("Location:index.php");
        exit;
        //caso o email exista volte para adicionar.php
    } else {
        header('Location:adicionar.php');
    }
}
//caso contrario voltar para a página adicionar.php
else {
    header('Location:adicionar.php');
    exit;
}
