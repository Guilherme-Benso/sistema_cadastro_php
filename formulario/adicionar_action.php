<?php 
require "conector.php";

//declarando a variavel que vai armazenar o dado para mandar para o banco
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);

//se estiver tudo certo continuar
if ($name && $email) {
}
//caso contrario voltar para a página adicionar.php
else {
    header('Location:adicionar.php');
    exit;
}