<?php
    session_start();
    if (!isset($_POST['username']) || !isset($_POST['password'])){
        header("Location: login.php?error=faltando_dados");
        exit();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "admin" && $password === "senha123"){
        $_SESSION['username'] = $username;
        echo "<h1>Login bem-sucedido!</h1>";
        echo "<p>Bem-vindo, $username!</p>";
    }
    else{
        $_SESSION['username'] = NULL;
        header("Location: login.php?error=credenciais_invalidas");
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
">
    <title>Document</title>
</head>
<body>
    <form action="imc_formulario.php" method="GET">
    <input type="text" name="nome"> 
    <input type="submit" value="Ir para o formulário de IMC">
    </form>
</body>