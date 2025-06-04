
<form >
<input type="color" name="cor"> 
    <input type="number" name="A">
    <input type="number" name="B">

    <input type="submit">

</form>

<?php 
 /*  programa que imprime a soma de dois números informados pelo usuário via get */

//Verificar se um parametro foi passado
$A=0; $B=0;

if (isset($_GET["A"])){
    $A=$_GET["A"];
}
if (isset($_GET["B"])){
    $B=$_GET["B"];
}

 

 echo "A soma de a e b é";
 echo  $A."+".$B."=".$A+$B;


 ?>


