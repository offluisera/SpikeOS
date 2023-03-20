<?php

   // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        //loga
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha']; 

        //print_r('Usuario: ' . $usuario);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);
        //print_r($sql);

        if(mysqli_num_rows($result) < 1) {
            print_r('Inexistente');
        } else {
            print_r('Existente');
        }


    }
    else{
        //nao loga
        header('Location: login-inicial.php');
    }


?>