<?php
# para receber uma informação do formulário
#utilizamos o metodo $_POST do php
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email= $_POST["email"];
$telefone = $_POST["telefone"];
echo $nome;
echo "<br>";
echo $sobrenome;
echo "<br>";
echo $email;
echo "<br>";
echo $telefone;


?>