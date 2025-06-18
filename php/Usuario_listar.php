<?php
    include_once "Usuario.php";
    if (isset($_GET['nome']) &&
        isset($_GET['email']) &&
        isset($_GET['senha'])){
            $usr=new Usuario($_GET['nome'],$_GET['email'],$_GET['senha']);
        }else{
            $usr=null;
        }

    if (!isset($arrayUSR)){
        $arrayUSR=array();
    }
    if ( isset($usr)){
        array_push($arrayUSR , $usr);
    }
    echo "<table>";
    echo "<th> <td> id </td> ";
    echo "     <td> nome</td> ";
    echo "     <td> email</td> ";
    echo "     <td> senha</td> ";
    echo "</th>";
    foreach($arrayUSR as $u){
    echo "<tr> <td>". $u->id . "</td> ";
    echo "     <td>". $u->nome . "</td> " ;
    echo "     <td>". $u->email . "</td> ";
    echo "     <td>". $u->senha . "</td> ";
    echo "</tr>";
        
    }
    echo "</table> ";


?>