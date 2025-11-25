<?php

    function connecta_bd(){
        $servername = "mysql-aluno";
        $username = "root";//root
        $password = "aluno";//admin
        $dbname = "webti";
        // Criar conexao
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    //connecta_bd();

    function cadastra_usuario($nome,$login,$senha){
        $con= connecta_bd();
        $stmt =$con->prepare("INSERT INTO usuarios (nome,  login, senha) 
                              VALUES (:nome, :login, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        return $stmt->execute();
     
    }
    //exemplo cadastro 
    //cadastra_usuario("Julia","julia","12345");

    function delete_usuario($id){
        $con= connecta_bd();
        $stmt =$con->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    //exemplo delete
   // for ($i=1; $i<=10; $i++)    
   //     delete_usuario($i);
   //update usuario
   function update_usuario ($id, $nome, $login, $senha){
        $con= connecta_bd();
        $stmt=$con->prepare("UPDATE usuarios 
                              SET nome = :nome, login = :login, senha = :senha
                              WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        return $stmt->execute();
    }
    //exemplo update
    //update_usuario(7,"Daniel","daniel","54321");

    //get usuario
    function get_usuario($id){
        $con= connecta_bd();
        $stmt=$con->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);   
    }
    //echo var_dump(get_usuario(6));
    //get usuarios
    function get_usuarios(){
     $con= connecta_bd();
     $stmt=$con->prepare("SELECT * FROM usuarios");
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // echo "<pre>";
    // print_r(var_dump(get_usuarios()));  
    // echo "</pre>";
   
        
?>