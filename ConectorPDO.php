<?php
//conectando no banco
$pdo = new PDO("MySQL:dbname= test; host=127.0.0.1:3306","seu-usuario","sua-senha");

//criando uma tabela
$sql = $pdo->query('CREATE TABLE personagens(
    id  int not null,
    nome varchar (40),
    idade int not null
    );');
//mostrando dados
$dados = $sql-> fetchAll(PDO::FETCH_ASSOC);
echo"</pre>";
print_r($dados);
