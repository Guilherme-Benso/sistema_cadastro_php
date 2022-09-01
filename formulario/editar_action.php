<?php
require "conector.php";

//declarando a variavel que vai armazenar o dado para mandar para o banco
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//se estiver tudo certo continuar
if ($nome && $email) {
    
}
else {
    header('Location:adicionar.php');
    exit;
}
