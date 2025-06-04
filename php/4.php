<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Imprima todos os temos de uma P.A até N inforado pelo usuário</h2>

        <label for="termon">Informe o indice do termo</label>
        <form action="">
            <label for="a1"></label>
            <input id="a1"type="text" name="a1">

            <label for="termn">termo n </label>
            <input id="termon"type="text" name="n">

            <label for="r" > razao</label>
            <input id="r"type="text" name="r">
            
            <input type="submit">
        </form>
        <?php 

        $r= isset($_GET["r"])?$_GET["r"]:1;
        $n= isset($_GET["n"])?$_GET["n"]:1;
        $i=1;
        $termon= isset($_GET["a1"])?$_GET["a1"]:0;
        for ($i=1;$i<=$n;$i++){
            echo "Termo:".$termon." - ";
            $termon+=$r;
        }
        ?>
        
    
</body>
</html>