<?php

session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// echo "Nome: $nome <br>";
// echo "Email: $email <br>";

$result_users = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
$resultado_users = mysqli_query($conn, $result_users);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color: green;'>Usuario cadastrado com sucesso</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color: red;'>Usuario cadastrado com sucesso</p>";
    header("Location: index.php");
}