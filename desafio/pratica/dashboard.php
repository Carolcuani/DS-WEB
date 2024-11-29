<?php

    session_start();
    $loginCerto = 'carol';
    $senhaCerto = '123';


    //Verifica se veio do formulario
    if (isset ($_POST ['login'])){
        //Verifica se o login esta correto
        if ($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){

        }
    }

    if (isset($SESSION['login']) and isset ($SESSION['senha'])){
        echo '<br>';
        echo $_POST ['login'];
        echo '<br>';
        echo $_POST ['senha'];


    }else{
        header('Location: index.php');
    }


?>