<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>IMC</h2>
    <form action="">
        <label for="peso">Peso</label>
        
        <?php 
        if (isset($_GET["peso"])) { ?>
            <input id="peso" type="" name="peso" placeholder="insira o peso" value="<?php echo $_GET["peso" ]?> ">
        <?php } else { ?>
            <input id="peso" type="number" name="peso" placeholder="insira o peso" >
        <?php
        } ?>
        <label for="altura">Altura</label>
        <input id="altura" type="" name="altura" value="<?php
            echo isset($_GET["altura"]) ? $_GET["altura"] : "";
          ?>" >

        <input type="submit">

    </form>
    <?php
        

        if (isset($_GET["peso"]) & isset($_GET["altura"]) ){
            $peso=$_GET['peso'];
            $altura=$_GET['altura'];
            echo "IMC=".$peso/($altura*$altura);
        }
    ?>
</body>
</html>