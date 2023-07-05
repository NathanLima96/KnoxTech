<?php

require 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


$query = "INSERT INTO usuarios VALUES(null, '$nome', '$email', $idade, '$telefone', '$senha')";

$exec = mysqli_query($conexao, $query);

header('Location:index.html')


?>