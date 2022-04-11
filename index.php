<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Digite seu melhor e-mail"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>