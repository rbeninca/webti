<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        if(isset($_SESSION['username'])){
            echo "<p>Usuário logado: " . $_SESSION['username'] . "</p>";
        }else{
            header("Location: login.php?error=nao_autenticado");
            exit();
        }
        if (isset($_GET['nome'])){ 
            $_SESSION['nome'] = $_GET['nome'];
            echo "<h2>Bem-vindo, " . $_SESSION['nome'] . " !</h2>";
        }

        if (isset($_GET['error']) && $_GET['error'] == 'faltando_dados'){
            echo "<p style='color:red;'>Erro: Por favor, preencha todos os campos.</p>";
        }
    ?>
    <form action="imc_resultado.php" method="POST">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required>
        <br><br>
        <label for="altura">Altura (m):</label>
        <input type="text" id="altura" name="altura" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular IMC">
    </form>    

</body>
</html>