<?php 

    //Recupera a sessão
    session_start();

    //Deslogando usuário:
    session_destroy();

    //Voltando para a Home:
    header('Location:index.php');
    //melhor deixar com aspas simples para garantir que vai ser texto

?>